<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
use App\Models\MetricValue;
use App\Models\Metric;
use App\Models\PomodoroSession;
use App\Models\Decision;
use App\Models\Client;
use App\Models\Project;
use App\Models\WeeklyReview;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DemoDataSeeder extends Seeder
{
    /**
     * Seed demo data for testing.
     */
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        if (!$user) {
            return;
        }

        $today = Carbon::today();
        $metrics = Metric::all()->keyBy('key');

        // ========================================
        // 1. METRIC VALUES (Last 14 days)
        // ========================================
        $metricData = [
            // Life & Discipline
            'gym_days' => [3, 2, 3, 4, 2, 3, 3, 2, 3, 4, 3, 2, 3, 3],
            'avg_work_hours' => [8, 9, 7, 8, 10, 9, 8, 7, 8, 9, 8, 7, 8, 8],
            'rest_days' => [1, 1, 2, 1, 0, 1, 2, 1, 1, 1, 2, 1, 1, 1],

            // Financial Safety
            'income' => [5000, 5000, 5000, 5000, 5000, 5000, 5000, 5500, 5500, 5500, 5500, 5500, 5500, 5500],
            'expenses' => [3500, 3500, 3500, 3500, 3500, 3500, 3500, 3800, 3800, 3800, 3800, 3800, 3800, 3800],
            'savings' => [12000, 12500, 13000, 13500, 14000, 14500, 15000, 15500, 16000, 16500, 17000, 17500, 18000, 18500],
        ];

        foreach ($metricData as $key => $values) {
            if (!isset($metrics[$key])) continue;

            foreach ($values as $i => $value) {
                $date = $today->copy()->subDays(13 - $i);
                MetricValue::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'metric_id' => $metrics[$key]->id,
                        'date' => $date->format('Y-m-d'),
                    ],
                    ['value' => $value]
                );
            }
        }

        // ========================================
        // 2. TASKS (Today + Recent)
        // ========================================
        Task::updateOrCreate(
            ['user_id' => $user->id, 'date' => $today->format('Y-m-d'), 'type' => 'one_thing'],
            [
                'title' => 'إنهاء مراجعة كود Decision OS Dashboard',
                'completed' => false,
            ]
        );

        // Top 3 for today
        $topTasks = [
            'مراجعة تقرير العميل الجديد',
            'إرسال فاتورة مشروع التصميم',
            'تحديث الـ Portfolio',
        ];
        foreach ($topTasks as $i => $title) {
            Task::updateOrCreate(
                ['user_id' => $user->id, 'date' => $today->format('Y-m-d'), 'type' => 'top_3', 'title' => $title],
                ['completed' => $i === 0] // First one completed
            );
        }

        // Past completed tasks
        for ($i = 1; $i <= 7; $i++) {
            Task::updateOrCreate(
                ['user_id' => $user->id, 'date' => $today->copy()->subDays($i)->format('Y-m-d'), 'type' => 'one_thing'],
                [
                    'title' => "مهمة رئيسية يوم " . $today->copy()->subDays($i)->format('D'),
                    'completed' => rand(0, 1) === 1,
                ]
            );
        }

        // ========================================
        // 3. POMODORO SESSIONS (Last 7 days)
        // ========================================
        for ($day = 0; $day < 7; $day++) {
            $date = $today->copy()->subDays($day);
            $sessionsCount = rand(4, 8);

            for ($s = 0; $s < $sessionsCount; $s++) {
                PomodoroSession::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'created_at' => $date->copy()->addHours(9 + $s),
                    ],
                    [
                        'duration' => 25 * 60, // 25 minutes
                        'status' => rand(0, 10) > 2 ? 'completed' : 'interrupted',
                        'energy_before' => rand(5, 8),
                        'energy_after' => rand(4, 7),
                    ]
                );
            }
        }

        // ========================================
        // 4. CLIENTS
        // ========================================
        $clients = [
            [
                'name' => 'شركة التقنية المتقدمة',
                'email' => 'contact@advtech.com',
                'total_revenue' => 15000,
                'late_payments' => 0,
                'effort_score' => 3,
                'communication_score' => 4,
                'status' => 'green',
            ],
            [
                'name' => 'مؤسسة الإبداع',
                'email' => 'info@creative.sa',
                'total_revenue' => 8500,
                'late_payments' => 1,
                'effort_score' => 4,
                'communication_score' => 3,
                'status' => 'yellow',
            ],
            [
                'name' => 'متجر النور الإلكتروني',
                'email' => 'hello@alnoor.store',
                'total_revenue' => 5000,
                'late_payments' => 2,
                'effort_score' => 5,
                'communication_score' => 2,
                'status' => 'red',
            ],
        ];

        foreach ($clients as $clientData) {
            Client::updateOrCreate(
                ['user_id' => $user->id, 'email' => $clientData['email']],
                array_merge($clientData, ['user_id' => $user->id])
            );
        }

        // ========================================
        // 5. PROJECTS
        // ========================================
        $client1 = Client::where('user_id', $user->id)->where('email', 'contact@advtech.com')->first();
        $client2 = Client::where('user_id', $user->id)->where('email', 'info@creative.sa')->first();

        $projects = [
            [
                'client_id' => $client1?->id,
                'name' => 'تطوير Dashboard إداري',
                'description' => 'لوحة تحكم شاملة لإدارة المبيعات',
                'total_revenue' => 8000,
                'total_hours' => 120,
                'total_pomodoros' => 180,
                'status' => 'completed',
                'start_date' => $today->copy()->subMonths(2),
                'end_date' => $today->copy()->subDays(20),
            ],
            [
                'client_id' => $client1?->id,
                'name' => 'نظام الفوترة',
                'description' => 'نظام إصدار فواتير آلي',
                'total_revenue' => 5000,
                'total_hours' => 60,
                'total_pomodoros' => 90,
                'status' => 'active',
                'start_date' => $today->copy()->subDays(15),
                'end_date' => null,
            ],
            [
                'client_id' => $client2?->id,
                'name' => 'تصميم هوية بصرية',
                'description' => 'شعار + ألوان + خطوط',
                'total_revenue' => 3000,
                'total_hours' => 25,
                'total_pomodoros' => 40,
                'status' => 'completed',
                'start_date' => $today->copy()->subMonths(1),
                'end_date' => $today->copy()->subDays(10),
            ],
        ];

        foreach ($projects as $projectData) {
            Project::updateOrCreate(
                ['user_id' => $user->id, 'name' => $projectData['name']],
                array_merge($projectData, ['user_id' => $user->id])
            );
        }

        // ========================================
        // 6. DECISIONS
        // ========================================
        $decisions = [
            [
                'title' => 'قبول مشروع نظام الفوترة',
                'context' => 'client',
                'reason' => 'العميل موثوق والميزانية مناسبة',
                'expected_outcome' => 'دخل إضافي 5000 ريال خلال شهر',
                'review_date' => $today->copy()->addDays(7),
                'actual_outcome' => null,
                'result' => 'pending',
            ],
            [
                'title' => 'رفض مشروع موقع تجاري',
                'context' => 'financial',
                'reason' => 'الميزانية منخفضة جداً والوقت المطلوب كبير',
                'expected_outcome' => 'توفير وقت للمشاريع الأفضل',
                'review_date' => $today->copy()->subDays(3),
                'actual_outcome' => 'قضيت الوقت في مشروع أفضل بـ 3x',
                'result' => 'win',
            ],
            [
                'title' => 'البدء بتعلم React Native',
                'context' => 'work',
                'reason' => 'طلب متزايد في السوق',
                'expected_outcome' => 'فتح فرص عمل جديدة',
                'review_date' => $today->copy()->addDays(30),
                'actual_outcome' => null,
                'result' => 'pending',
            ],
        ];

        foreach ($decisions as $decisionData) {
            Decision::updateOrCreate(
                ['user_id' => $user->id, 'title' => $decisionData['title']],
                array_merge($decisionData, ['user_id' => $user->id])
            );
        }

        // ========================================
        // 7. WEEKLY REVIEW
        // ========================================
        WeeklyReview::updateOrCreate(
            ['user_id' => $user->id, 'week_start' => $today->copy()->startOfWeek()->subWeek()],
            [
                'kpi_snapshot' => json_encode([
                    'gym_days' => 3,
                    'work_hours' => 42,
                    'pomodoros' => 35,
                    'income' => 5000,
                    'runway' => 4.2,
                ]),
                'what_worked' => 'الالتزام بـ Pomodoro ساعد في زيادة الإنتاجية بشكل ملحوظ. أنهيت 3 مشاريع.',
                'what_failed' => 'لم ألتزم بالجيم كما خططت. يجب تثبيت موعد محدد.',
                'next_week_focus' => 'إنهاء نظام الفوترة + الذهاب للجيم 4 مرات',
            ]
        );

        $this->command->info('✅ Demo data seeded successfully!');
        $this->command->info('');
        $this->command->info('📧 Login credentials:');
        $this->command->info('   Email: test@example.com');
        $this->command->info('   Password: password123');
    }
}
