/**
 * Language Switcher - يعيد تحميل الصفحة مع اللغة الجديدة
 * ويتغير الاتجاه RTL/LTR تلقائياً
 * ويحفظ الإعداد في localStorage للـ Theme Customizer
 */

// تطبيق الاتجاه فوراً من localStorage قبل تحميل الصفحة لمنع FOUC
(function() {
    const savedDir = localStorage.getItem('dir');
    if (savedDir) {
        document.documentElement.dir = savedDir;
    }
})();

document.addEventListener('DOMContentLoaded', function() {
    const languageSwitchers = document.querySelectorAll('.language-switch');

    languageSwitchers.forEach(switcher => {
        switcher.addEventListener('click', function(e) {
            e.preventDefault();

            const locale = this.getAttribute('data-locale');
            const url = this.getAttribute('href');

            // تحديد الاتجاه بناءً على اللغة
            const dir = locale === 'ar' ? 'rtl' : 'ltr';

            // تعديل الـ dir فوراً قبل إعادة التحميل
            document.documentElement.dir = dir;
            document.documentElement.lang = locale;

            // حفظ اللغة في localStorage
            localStorage.setItem('language', locale);

            // حفظ الاتجاه في localStorage للـ Theme Customizer (layout-setup.js)
            localStorage.setItem('dir', dir);

            // تحديث الـ radio button في الـ Theme Customizer إن وجد
            const rtlRadio = document.getElementById('rtlMode');
            const ltrRadio = document.getElementById('ltrMode');
            if (dir === 'rtl' && rtlRadio) {
                rtlRadio.checked = true;
            } else if (dir === 'ltr' && ltrRadio) {
                ltrRadio.checked = true;
            }

            // إعادة التحميل
            window.location.href = url;
        });
    });

    // تطبيق اللغة المحفوظة عند التحميل
    const savedLocale = localStorage.getItem('language');
    if (savedLocale) {
        const dir = savedLocale === 'ar' ? 'rtl' : 'ltr';
        document.documentElement.dir = dir;
        document.documentElement.lang = savedLocale;

        // تحديث localStorage للـ dir ليتوافق مع اللغة
        localStorage.setItem('dir', dir);
    }
});
