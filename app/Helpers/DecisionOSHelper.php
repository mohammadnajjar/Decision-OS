<?php

namespace App\Helpers;

class DecisionOSHelper
{
    /**
     * Get status color classes.
     */
    public static function getStatusColors(string $status): array
    {
        return config("decisionos.statuses.{$status}", config('decisionos.statuses.yellow'));
    }

    /**
     * Get module icon.
     */
    public static function getIcon(string $key): string
    {
        return config("decisionos.icons.{$key}", 'ri-apps-line');
    }

    /**
     * Get module color.
     */
    public static function getModuleColor(string $module): string
    {
        return config("decisionos.colors.{$module}", config('decisionos.colors.primary'));
    }

    /**
     * Get target for a KPI.
     */
    public static function getTarget(string $key): mixed
    {
        return config("decisionos.targets.{$key}");
    }

    /**
     * Format currency.
     */
    public static function formatCurrency(float $amount, ?string $currency = null): string
    {
        $currency = $currency ?? config('decisionos.default_currency', 'USD');
        $symbols = [
            'USD' => '$',
            'EUR' => '€',
            'GBP' => '£',
            'SAR' => 'ر.س',
            'AED' => 'د.إ',
            'JOD' => 'د.أ',
            'EGP' => 'ج.م',
        ];
        $symbol = $symbols[$currency] ?? $currency;
        return $symbol . number_format($amount, 2);
    }

    /**
     * Get progress color based on percentage.
     */
    public static function getProgressColor(float $percentage): string
    {
        if ($percentage >= 100) return 'success';
        if ($percentage >= 75) return 'info';
        if ($percentage >= 50) return 'warning';
        return 'danger';
    }

    /**
     * Get status badge HTML.
     */
    public static function statusBadge(string $status): string
    {
        $colors = self::getStatusColors($status);
        $label = app()->getLocale() === 'ar'
            ? $colors['label_ar']
            : $colors['label_en'];

        return sprintf(
            '<span class="badge %s rounded-pill px-3"><i class="%s me-1"></i>%s</span>',
            $colors['bg'],
            $colors['icon'],
            $label
        );
    }

    /**
     * Translate with fallback.
     */
    public static function t(string $key, array $replace = []): string
    {
        return __("app.{$key}", $replace);
    }
}
