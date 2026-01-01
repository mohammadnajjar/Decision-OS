<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Zakat Module Translations
    |--------------------------------------------------------------------------
    */

    'title' => 'Zakat Calculator',
    'dashboard' => 'Zakat Dashboard',
    'settings' => 'Zakat Settings',
    'history' => 'Payment History',

    // Status Labels
    'status' => [
        'not_applicable' => 'Settings incomplete',
        'below_nisab' => 'Below Nisab - No Zakat',
        'not_due' => 'Hawl not complete yet',
        'approaching' => 'Zakat due date approaching',
        'due' => 'Zakat is due',
        'unknown' => 'Unknown',
    ],

    // Form Labels
    'labels' => [
        'enabled' => 'Enable Zakat Calculator',
        'hawl_start_date' => 'Hawl Start Date',
        'nisab_gold_price' => 'Gold Price per Gram',
        'currency' => 'Currency',
        'calculation_method' => 'Hawl Calculation Method',
        'include_receivable_debts' => 'Include debts owed to me',
        'notes' => 'Notes',
        'amount' => 'Amount',
        'payment_date' => 'Payment Date',
        'hijri_year' => 'Hijri Year',
        'recipient' => 'Recipient',
        'reset_hawl' => 'Reset Hawl from today',
    ],

    // Calculation Methods
    'methods' => [
        'hijri_year' => 'Hijri Year (354 days)',
        'gregorian_year' => 'Gregorian Year (365 days)',
    ],

    // Messages
    'settings_saved' => 'Zakat settings saved successfully',
    'payment_recorded' => 'Zakat payment recorded successfully',
    'payment_deleted' => 'Zakat payment deleted',

    // Dashboard
    'zakatable_assets' => 'Zakatable Assets',
    'nisab_value' => 'Nisab Value',
    'zakat_due' => 'Zakat Due',
    'days_remaining' => 'Days until Hawl',
    'hawl' => 'Hawl',
    'nisab_reached' => 'Nisab Reached',
    'below_nisab_short' => 'Below Nisab',
    'hawl_complete' => 'Hawl Complete',
    'last_payment' => 'Last Payment',
    'total_this_year' => 'Total This Year',

    // Breakdown
    'assets_breakdown' => 'Zakatable Assets Breakdown',
    'accounts' => 'Accounts',
    'debts_payable' => 'Debts I Owe',
    'debts_receivable' => 'Debts Owed to Me',

    // Actions
    'record_payment' => 'I paid my Zakat',
    'view_history' => 'Payment History',
    'configure' => 'Configure Now',
    'update_gold_price' => 'Update Gold Price',

    // Info
    'nisab_info' => 'Nisab = 85 grams of gold',
    'zakat_rate' => 'Zakat Rate = 2.5%',
    'hijri_days' => 'Hijri Year = 354 days',
    'gregorian_days' => 'Gregorian Year = 365 days',

    // Warnings
    'disclaimer' => 'This is an estimated calculation to help you plan. Please consult a scholar or trusted authority to confirm the correct amount. This system does not specify recipients or issue fatwas.',
    'receivable_debt_warning' => 'Some scholars do not require zakat on debts owed to you. Consult a scholar to confirm.',

    // Insights
    'insights' => [
        'due' => 'Zakat is due (estimated: :amount) – consult a scholar',
        'approaching' => 'Zakat due date approaching – :days days left',
        'below_nisab' => 'Your wealth is below nisab – no zakat due this year',
        'paid' => 'May Allah bless your wealth – Zakat payment recorded',
    ],
];
