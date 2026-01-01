<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Zakat Module Translations
    |--------------------------------------------------------------------------
    */

    'title' => 'حاسبة الزكاة',
    'dashboard' => 'لوحة الزكاة',
    'settings' => 'إعدادات الزكاة',
    'history' => 'سجل دفعات الزكاة',

    // Status Labels
    'status' => [
        'not_applicable' => 'الإعدادات غير مكتملة',
        'below_nisab' => 'تحت النصاب - لا زكاة',
        'not_due' => 'لم يحل الحول بعد',
        'approaching' => 'اقترب موعد الزكاة',
        'due' => 'الزكاة مستحقة',
        'unknown' => 'غير محدد',
    ],

    // Form Labels
    'labels' => [
        'enabled' => 'تفعيل حاسبة الزكاة',
        'hawl_start_date' => 'تاريخ بداية الحول',
        'nisab_gold_price' => 'سعر غرام الذهب',
        'currency' => 'العملة',
        'calculation_method' => 'طريقة حساب الحول',
        'include_receivable_debts' => 'احتساب الديون المستحقة لي',
        'notes' => 'ملاحظات',
        'amount' => 'المبلغ',
        'payment_date' => 'تاريخ الدفع',
        'hijri_year' => 'السنة الهجرية',
        'recipient' => 'الجهة المستلمة',
        'reset_hawl' => 'إعادة بدء الحول من اليوم',
    ],

    // Calculation Methods
    'methods' => [
        'hijri_year' => 'السنة الهجرية (354 يوم)',
        'gregorian_year' => 'السنة الميلادية (365 يوم)',
    ],

    // Messages
    'settings_saved' => 'تم حفظ إعدادات الزكاة بنجاح',
    'payment_recorded' => 'تم تسجيل دفعة الزكاة بنجاح',
    'payment_deleted' => 'تم حذف دفعة الزكاة',

    // Dashboard
    'zakatable_assets' => 'الأصول الزكوية',
    'nisab_value' => 'قيمة النصاب',
    'zakat_due' => 'الزكاة المستحقة',
    'days_remaining' => 'الأيام المتبقية للحول',
    'hawl' => 'الحول',
    'nisab_reached' => 'بلغ النصاب',
    'below_nisab_short' => 'تحت النصاب',
    'hawl_complete' => 'اكتمل الحول',
    'last_payment' => 'آخر دفعة',
    'total_this_year' => 'إجمالي هذه السنة',

    // Breakdown
    'assets_breakdown' => 'تفصيل الأصول الزكوية',
    'accounts' => 'الحسابات',
    'debts_payable' => 'ديون علي',
    'debts_receivable' => 'ديون لي',

    // Actions
    'record_payment' => 'سجّلت دفع الزكاة',
    'view_history' => 'سجل الدفعات',
    'configure' => 'تفعيل الآن',
    'update_gold_price' => 'تحديث سعر الذهب',

    // Info
    'nisab_info' => 'النصاب = 85 غرام ذهب',
    'zakat_rate' => 'نسبة الزكاة = 2.5%',
    'hijri_days' => 'الحول الهجري = 354 يوم',
    'gregorian_days' => 'الحول الميلادي = 365 يوم',

    // Warnings
    'disclaimer' => 'هذا الحساب تقديري لمساعدتك في التخطيط المالي. يرجى مراجعة عالم شرعي أو جهة موثوقة للتأكد من المبلغ الصحيح. النظام لا يحدد جهة الدفع ولا يُصدر فتوى.',
    'receivable_debt_warning' => 'بعض العلماء لا يوجبون زكاة الدين على الغير. راجع عالمًا للتأكد.',

    // Insights
    'insights' => [
        'due' => 'الزكاة مستحقة تقديرًا (:amount) – راجع عالم للتأكد',
        'approaching' => 'اقترب موعد الزكاة – بقي :days يوم',
        'below_nisab' => 'مالك تحت النصاب – لا زكاة عليك هذا العام',
        'paid' => 'بارك الله في مالك – سجلت دفع الزكاة',
    ],
];
