/**
 * Language Switcher - يعيد تحميل الصفحة مع اللغة الجديدة
 * ويتغير الاتجاه RTL/LTR تلقائياً
 */
document.addEventListener('DOMContentLoaded', function() {
    const languageSwitchers = document.querySelectorAll('.language-switch');

    languageSwitchers.forEach(switcher => {
        switcher.addEventListener('click', function(e) {
            e.preventDefault();

            const locale = this.getAttribute('data-locale');
            const url = this.getAttribute('href');

            // تعديل الـ dir فوراً قبل إعادة التحميل
            const dir = locale === 'ar' ? 'rtl' : 'ltr';
            document.documentElement.dir = dir;
            document.documentElement.lang = locale;

            // حفظ اللغة في localStorage
            localStorage.setItem('language', locale);

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
    }
});
