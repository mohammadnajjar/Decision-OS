const mix = require('laravel-mix');
const path = require('path');
const fs = require('fs-extra');
const rtlcss = require('rtlcss');

// Define global paths - updated for Laravel structure
const folder = {
    src: "./resources/",
    src_assets: "./resources/assets/",
    dist: "./public/",
    dist_assets: "./public/assets/"
};

// Define RTL CSS pairs
const cssPairs = [
    { ltr: 'assets/css/app.min.css', rtl: 'assets/css/app-rtl.min.css' },
    { ltr: 'assets/css/bootstrap.min.css', rtl: 'assets/css/bootstrap-rtl.min.css' },
    { ltr: 'assets/css/icons.min.css', rtl: 'assets/css/icons-rtl.min.css' }
];

// Disable mix-manifest.json
mix.options({
    manifest: false
});

// Set public path
mix.setPublicPath(folder.dist);

// Configure webpack to resolve imports correctly
mix.webpackConfig({
    performance: {
        hints: false // Disable performance hints
    },
    resolve: {
        modules: [
            'node_modules',
            path.resolve(__dirname, 'node_modules')
        ],
        alias: {
            'bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'remixicon': path.resolve(__dirname, 'node_modules/remixicon'),
            'bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons')
        }
    }
});

// Handle SCSS files with proper error handling
mix.sass(path.join(folder.src_assets, 'scss/app.scss'), 'assets/css/app.min.css')
   .sass(path.join(folder.src_assets, 'scss/bootstrap.scss'), 'assets/css/bootstrap.min.css')
   .sass(path.join(folder.src_assets, 'scss/icons.scss'), 'assets/css/icons.min.css')
   .options({
       processCssUrls: false // Important: Don't process URLs to preserve font paths
   });

// Create destination directories before copying (to prevent EPERM errors)
const ensureDirectoriesExist = () => {
    const dirs = [
        path.join(folder.dist_assets, 'images'),
        path.join(folder.dist_assets, 'js'),
        path.join(folder.dist_assets, 'fonts'),
        path.join(folder.dist_assets, 'libs'),
        path.join(folder.dist_assets, 'css'),
        // path.join(folder.dist_assets, 'css/fonts')
    ];
    
    dirs.forEach(dir => {
        if (!fs.existsSync(dir)) {
            fs.mkdirSync(dir, { recursive: true });
            console.log(`Created directory: ${dir}`);
        }
    });
};

// Copy icon fonts directly to the right location
const copyIconFonts = () => {
    try {
        // Copy Remixicon fonts
        const remixiconFontsDir = path.resolve(__dirname, 'node_modules/remixicon/fonts');
        fs.copySync(remixiconFontsDir, path.join(folder.dist_assets, 'css'), {
            filter: (src) => {
                // Copy only font files
                return fs.statSync(src).isDirectory() || /\.(woff|woff2|ttf|eot|svg)$/.test(src);
            },
            overwrite: true
        });
        console.log('Copied Remixicon fonts to css/fonts directory');
        
        // Copy Bootstrap Icons fonts
        const bootstrapIconsFontsDir = path.resolve(__dirname, 'node_modules/bootstrap-icons/font/fonts');
        if (fs.existsSync(bootstrapIconsFontsDir)) {
            fs.copySync(bootstrapIconsFontsDir, path.join(folder.dist_assets, 'css/fonts'), {
                filter: (src) => {
                    // Copy only font files
                    return fs.statSync(src).isDirectory() || /\.(woff|woff2|ttf|eot|svg)$/.test(src);
                },
                overwrite: true
            });
            console.log('Copied Bootstrap Icons fonts to css/fonts directory');
        }
    } catch (error) {
        console.error('Error copying icon fonts:', error);
    }
};

// Run these before compilation
ensureDirectoriesExist();
copyIconFonts();

// Use fs-extra for more reliable copying
mix.after(stats => {
    try {
        // Copy main assets
        fs.copySync(path.join(folder.src_assets, 'images'), path.join(folder.dist_assets, 'images'), { overwrite: true });
        console.log('Copied images directory');
        
        fs.copySync(path.join(folder.src_assets, 'js'), path.join(folder.dist_assets, 'js'), { overwrite: true });
        console.log('Copied js directory');
        
        fs.copySync(path.join(folder.src_assets, 'fonts'), path.join(folder.dist_assets, 'fonts'), { overwrite: true });
        console.log('Copied fonts directory');
        
        fs.copySync(path.join(folder.src_assets, 'libs'), path.join(folder.dist_assets, 'libs'), { overwrite: true });
        console.log('Copied libs directory');
        
        // Copy icon fonts again after compilation
        copyIconFonts();
        
        // Generate RTL CSS files
        cssPairs.forEach(pair => {
            const ltrPath = path.join(folder.dist, pair.ltr);
            const rtlPath = path.join(folder.dist, pair.rtl);
            
            if (fs.existsSync(ltrPath)) {
                const ltrCss = fs.readFileSync(ltrPath, 'utf8');
                const rtlCss = rtlcss.process(ltrCss, { autoRename: false, clean: false });
                fs.writeFileSync(rtlPath, rtlCss);
                console.log(`Generated RTL CSS: ${rtlPath}`);
            } else {
                console.warn(`LTR CSS file not found: ${ltrPath}`);
            }
        });
    } catch (error) {
        console.error('Error in mix.after():', error);
    }
});

// Configure BrowserSync
mix.browserSync({
    proxy: 'localhost:8000', // Use Laravel's default server
    files: [
        `${folder.dist}/**/*`,
        `${folder.src}/**/*.php`,
    ]
});

// Development mode settings
if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    });
    mix.sourceMaps();
}