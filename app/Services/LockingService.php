<?php

namespace App\Services;

use App\Models\User;

class LockingService
{
    private StatusService $statusService;

    public function __construct(StatusService $statusService)
    {
        $this->statusService = $statusService;
    }

    /**
     * Check if the system is locked for a user.
     * Locked when ≥2 red statuses.
     */
    public function isLocked(User $user): bool
    {
        return $this->statusService->isGloballyLocked($user);
    }

    /**
     * Get modules that are locked.
     */
    public function getLockedModules(): array
    {
        return [
            'business_assets',
            'new_projects',
            'learning_expansion',
        ];
    }

    /**
     * Get actions that are still allowed when locked.
     */
    public function getAllowedActions(): array
    {
        return [
            'view_dashboard',
            'input_metrics',
            'complete_tasks',
            'run_pomodoro',
            'weekly_review',
            'fix_red_statuses',
        ];
    }

    /**
     * Get current red statuses that need fixing.
     */
    public function getRedStatuses(User $user): array
    {
        $statuses = $this->statusService->getAllStatuses($user);
        $redModules = [];

        foreach ($statuses as $module => $status) {
            if ($status === StatusService::RED) {
                $redModules[] = [
                    'module' => $module,
                    'label' => $this->getModuleLabel($module),
                    'fix_action' => $this->getFixAction($module),
                ];
            }
        }

        return $redModules;
    }

    /**
     * Get lock message for display.
     */
    public function getLockMessage(User $user): ?string
    {
        if (!$this->isLocked($user)) {
            return null;
        }

        $redCount = $this->statusService->getRedCount($user);
        return "⚠️ النظام مقفل - لديك {$redCount} حالات حمراء. أصلحها أولاً قبل البدء بمشاريع جديدة.";
    }

    /**
     * Get module display label.
     */
    private function getModuleLabel(string $module): string
    {
        return match ($module) {
            'life_discipline' => 'الانضباط والحياة',
            'financial_safety' => 'الأمان المالي',
            'focus_system' => 'نظام التركيز',
            'pomodoro' => 'Pomodoro',
            default => $module,
        };
    }

    /**
     * Get suggested fix action for a module.
     */
    private function getFixAction(string $module): string
    {
        return match ($module) {
            'life_discipline' => 'خذ يوم راحة أو اذهب للجيم',
            'financial_safety' => 'راجع مصاريفك وخفضها',
            'focus_system' => 'أكمل مهمة اليوم',
            'pomodoro' => 'ابدأ 3 جلسات Pomodoro',
            default => 'راجع البيانات وأصلح المشكلة',
        };
    }
}
