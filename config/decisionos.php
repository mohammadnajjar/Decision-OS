<?php

/**
 * Decision OS Configuration
 * توحيد الألوان والستايل
 */

return [
    /*
    |--------------------------------------------------------------------------
    | App Info
    |--------------------------------------------------------------------------
    */
    'name' => 'Decision OS',
    'version' => '1.0.0',
    'author' => 'Mohammad Najjar',

    /*
    |--------------------------------------------------------------------------
    | Theme Colors
    |--------------------------------------------------------------------------
    | الألوان الموحدة للنظام
    */
    'colors' => [
        // Primary Colors
        'primary' => '#3b82f6',      // أزرق - اللون الرئيسي
        'secondary' => '#6b7280',    // رمادي

        // Status Colors
        'success' => '#22c55e',      // أخضر - نجاح/جيد
        'warning' => '#f59e0b',      // أصفر - تحذير
        'danger' => '#ef4444',       // أحمر - خطر
        'info' => '#06b6d4',         // سماوي - معلومات

        // Module Colors
        'discipline' => '#ec4899',   // وردي - الانضباط والحياة
        'financial' => '#22c55e',    // أخضر - الأمان المالي
        'focus' => '#3b82f6',        // أزرق - نظام التركيز
        'pomodoro' => '#ef4444',     // أحمر - بومودورو
        'quran' => '#10b981',        // أخضر زمردي - القرآن
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Icons
    |--------------------------------------------------------------------------
    | أيقونات الوحدات (Remix Icons)
    */
    'icons' => [
        'dashboard' => 'ri-dashboard-line',
        'daily_input' => 'ri-add-circle-line',
        'discipline' => 'ri-heart-pulse-line',
        'financial' => 'ri-wallet-3-line',
        'focus' => 'ri-focus-3-line',
        'pomodoro' => 'ri-timer-line',
        'quran' => 'ri-book-open-line',
        'tasks' => 'ri-checkbox-circle-line',
        'expenses' => 'ri-shopping-cart-line',
        'incomes' => 'ri-money-dollar-circle-line',
        'projects' => 'ri-folder-line',
        'clients' => 'ri-user-star-line',
        'decisions' => 'ri-lightbulb-line',
        'goals' => 'ri-trophy-line',
        'weekly_review' => 'ri-file-list-3-line',
        'metrics' => 'ri-bar-chart-line',
        'settings' => 'ri-settings-line',
        'profile' => 'ri-user-line',
    ],

    /*
    |--------------------------------------------------------------------------
    | Status Configuration
    |--------------------------------------------------------------------------
    | تكوين حالات النظام
    */
    'statuses' => [
        'green' => [
            'label_ar' => 'جيد',
            'label_en' => 'Good',
            'bg' => 'bg-success',
            'text' => 'text-success',
            'subtle' => 'bg-success-subtle',
            'icon' => 'ri-checkbox-circle-line',
            'border' => 'border-success',
        ],
        'yellow' => [
            'label_ar' => 'تحذير',
            'label_en' => 'Warning',
            'bg' => 'bg-warning',
            'text' => 'text-warning',
            'subtle' => 'bg-warning-subtle',
            'icon' => 'ri-error-warning-line',
            'border' => 'border-warning',
        ],
        'red' => [
            'label_ar' => 'خطر',
            'label_en' => 'Danger',
            'bg' => 'bg-danger',
            'text' => 'text-danger',
            'subtle' => 'bg-danger-subtle',
            'icon' => 'ri-close-circle-line',
            'border' => 'border-danger',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | KPI Targets
    |--------------------------------------------------------------------------
    | الأهداف الافتراضية للمؤشرات
    */
    'targets' => [
        'gym_days_per_week' => 3,
        'rest_days_per_week' => 1,
        'work_hours_per_day' => 8,
        'pomodoros_per_day' => 6,
        'tasks_per_week' => 5,
        'runway_months' => 3,
        'savings_rate_percent' => 20,
        'max_work_streak_days' => 6,
        'max_interruption_rate' => 30,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    */
    'default_currency' => 'USD',
    'currencies' => ['USD', 'EUR', 'GBP', 'SAR', 'AED', 'JOD', 'EGP'],
];
