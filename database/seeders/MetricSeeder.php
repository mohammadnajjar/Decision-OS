<?php

namespace Database\Seeders;

use App\Models\Metric;
use Illuminate\Database\Seeder;

class MetricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metrics = [
            // Life & Discipline Module
            [
                'name' => 'Gym Days',
                'key' => 'gym_days',
                'module' => 'life_discipline',
                'data_type' => 'integer',
                'config' => ['min' => 0, 'max' => 7, 'target' => 3, 'unit' => 'days/week'],
                'sort_order' => 1,
            ],
            [
                'name' => 'Work Hours',
                'key' => 'avg_work_hours',
                'module' => 'life_discipline',
                'data_type' => 'decimal',
                'config' => ['min' => 0, 'max' => 16, 'target' => 8, 'unit' => 'hours/day'],
                'sort_order' => 2,
            ],
            [
                'name' => 'Rest Days',
                'key' => 'rest_days',
                'module' => 'life_discipline',
                'data_type' => 'integer',
                'config' => ['min' => 0, 'max' => 7, 'target' => 1, 'unit' => 'days/week'],
                'sort_order' => 3,
            ],
            [
                'name' => 'Work Days Streak',
                'key' => 'work_streak',
                'module' => 'life_discipline',
                'data_type' => 'integer',
                'config' => ['min' => 0, 'max' => 30, 'warning' => 10, 'unit' => 'days'],
                'sort_order' => 4,
            ],

            // Financial Safety Module
            [
                'name' => 'Monthly Income',
                'key' => 'income',
                'module' => 'financial_safety',
                'data_type' => 'decimal',
                'config' => ['min' => 0, 'unit' => 'currency'],
                'sort_order' => 1,
            ],
            [
                'name' => 'Monthly Expenses',
                'key' => 'expenses',
                'module' => 'financial_safety',
                'data_type' => 'decimal',
                'config' => ['min' => 0, 'unit' => 'currency'],
                'sort_order' => 2,
            ],
            [
                'name' => 'Savings',
                'key' => 'savings',
                'module' => 'financial_safety',
                'data_type' => 'decimal',
                'config' => ['min' => 0, 'unit' => 'currency'],
                'sort_order' => 3,
            ],

            // Focus System Module (calculated from tasks)
            [
                'name' => 'Tasks Completed',
                'key' => 'tasks_completed',
                'module' => 'focus_system',
                'data_type' => 'integer',
                'config' => ['min' => 0, 'target' => 5, 'unit' => 'tasks/week'],
                'sort_order' => 1,
            ],

            // Pomodoro Module (calculated from sessions)
            [
                'name' => 'Pomodoros Per Day',
                'key' => 'pomodoros_per_day',
                'module' => 'pomodoro',
                'data_type' => 'decimal',
                'config' => ['min' => 0, 'target' => 6, 'unit' => 'sessions/day'],
                'sort_order' => 1,
            ],
            [
                'name' => 'Focus Minutes',
                'key' => 'focus_minutes',
                'module' => 'pomodoro',
                'data_type' => 'integer',
                'config' => ['min' => 0, 'target' => 150, 'unit' => 'minutes/day'],
                'sort_order' => 2,
            ],
            [
                'name' => 'Interruption Rate',
                'key' => 'interruption_rate',
                'module' => 'pomodoro',
                'data_type' => 'decimal',
                'config' => ['min' => 0, 'max' => 1, 'warning' => 0.4, 'unit' => 'percentage'],
                'sort_order' => 3,
            ],
        ];

        foreach ($metrics as $metric) {
            Metric::updateOrCreate(
                ['key' => $metric['key']],
                $metric
            );
        }
    }
}
