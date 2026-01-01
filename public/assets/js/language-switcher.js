/**
 * Language Switcher - يعيد تحميل الصفحة مع اللغة الجديدة
 * كل الإعدادات تُحفظ في قاعدة البيانات (Backend Only)
 */
document.addEventListener('DOMContentLoaded', function() {
    const languageSwitchers = document.querySelectorAll('.language-switch');

    languageSwitchers.forEach(switcher => {
        switcher.addEventListener('click', function(e) {
            e.preventDefault();

            const locale = this.getAttribute('data-locale');
            const url = this.getAttribute('href');
            const dir = locale === 'ar' ? 'rtl' : 'ltr';

            // تطبيق التغيير فوراً قبل إعادة التحميل لتحسين UX
            document.documentElement.dir = dir;
            document.documentElement.lang = locale;

            // إعادة التحميل - سيتم حفظ اللغة في قاعدة البيانات عبر Controller
            window.location.href = url;
        });
    });
});
