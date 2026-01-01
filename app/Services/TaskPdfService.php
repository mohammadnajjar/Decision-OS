<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Collection;

class TaskPdfService
{
    /**
     * تجهيز بيانات المهام للتصدير
     */
    public function prepareTodayTasksData(int $userId): array
    {
        $today = now()->toDateString();

        // Today One Thing
        $todayOneThingTask = Task::where('user_id', $userId)
            ->where('type', 'today_one_thing')
            ->whereDate('created_at', $today)
            ->first();

        // Top 3 Tasks
        $top3Tasks = Task::where('user_id', $userId)
            ->where('type', 'top_3')
            ->whereDate('created_at', $today)
            ->orderBy('priority')
            ->get();

        // All Tasks
        $allTasks = Task::where('user_id', $userId)
            ->whereDate('created_at', $today)
            ->orderBy('is_completed')
            ->orderBy('priority')
            ->get();

        return [
            'date' => now()->format('Y-m-d'),
            'date_arabic' => $this->getArabicDate(),
            'today_one_thing' => $todayOneThingTask,
            'top_3' => $top3Tasks,
            'all_tasks' => $allTasks,
            'stats' => [
                'total' => $allTasks->count(),
                'completed' => $allTasks->where('is_completed', true)->count(),
                'pending' => $allTasks->where('is_completed', false)->count(),
            ],
        ];
    }

    /**
     * إنشاء HTML للتصدير
     */
    public function generateHtml(array $data): string
    {
        $html = $this->getHtmlTemplate();

        // استبدال البيانات في القالب
        $html = str_replace('{{DATE}}', $data['date'], $html);
        $html = str_replace('{{DATE_ARABIC}}', $data['date_arabic'], $html);
        $html = str_replace('{{TOTAL}}', $data['stats']['total'], $html);
        $html = str_replace('{{COMPLETED}}', $data['stats']['completed'], $html);
        $html = str_replace('{{PENDING}}', $data['stats']['pending'], $html);

        // Today One Thing
        if ($data['today_one_thing']) {
            $status = $data['today_one_thing']->is_completed ? '✅' : '⏳';
            $html = str_replace('{{TODAY_ONE_THING}}', $status . ' ' . $data['today_one_thing']->title, $html);
        } else {
            $html = str_replace('{{TODAY_ONE_THING}}', 'لم يتم تحديد مهمة اليوم', $html);
        }

        // Top 3 Tasks
        $top3Html = '';
        foreach ($data['top_3'] as $index => $task) {
            $status = $task->is_completed ? '✅' : '⏳';
            $top3Html .= '<tr><td>' . ($index + 1) . '</td><td>' . $task->title . '</td><td>' . $status . '</td></tr>';
        }
        $html = str_replace('{{TOP_3_TASKS}}', $top3Html ?: '<tr><td colspan="3">لا توجد مهام</td></tr>', $html);

        // All Tasks
        $allTasksHtml = '';
        foreach ($data['all_tasks'] as $task) {
            $status = $task->is_completed ? '✅ مكتملة' : '⏳ قيد التنفيذ';
            $statusClass = $task->is_completed ? 'completed' : 'pending';
            $allTasksHtml .= '<tr class="' . $statusClass . '"><td>' . $task->title . '</td><td>' . $status . '</td><td>' . ($task->notes ?? '-') . '</td></tr>';
        }
        $html = str_replace('{{ALL_TASKS}}', $allTasksHtml ?: '<tr><td colspan="3">لا توجد مهام</td></tr>', $html);

        return $html;
    }

    /**
     * قالب HTML للتصدير
     */
    private function getHtmlTemplate(): string
    {
        return <<<HTML
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>مهام اليوم - {{DATE}}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');
        * { box-sizing: border-box; }
        body {
            font-family: 'Tajawal', 'Arial', sans-serif;
            direction: rtl;
            padding: 30px;
            color: #333;
            line-height: 1.8;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #3b82f6;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #1e40af;
            margin: 0;
            font-size: 28px;
        }
        .header .date {
            color: #6b7280;
            font-size: 16px;
            margin-top: 10px;
        }
        .stats {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }
        .stat-box {
            text-align: center;
            padding: 15px 25px;
            border-radius: 10px;
            min-width: 100px;
        }
        .stat-box.total { background: #e0f2fe; color: #0369a1; }
        .stat-box.completed { background: #dcfce7; color: #166534; }
        .stat-box.pending { background: #fef3c7; color: #92400e; }
        .stat-box .number { font-size: 32px; font-weight: 700; }
        .stat-box .label { font-size: 14px; }
        .section {
            margin-bottom: 30px;
            background: #f8fafc;
            padding: 20px;
            border-radius: 10px;
        }
        .section h2 {
            color: #1e40af;
            font-size: 20px;
            margin-top: 0;
            border-bottom: 2px solid #3b82f6;
            padding-bottom: 10px;
        }
        .today-one-thing {
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            font-size: 22px;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px;
            text-align: right;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background: #1e40af;
            color: white;
        }
        tr:nth-child(even) { background: #f1f5f9; }
        tr.completed td { color: #166534; }
        tr.pending td { color: #92400e; }
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📋 Decision OS - مهام اليوم</h1>
        <div class="date">{{DATE_ARABIC}} | {{DATE}}</div>
    </div>

    <div class="stats">
        <div class="stat-box total">
            <div class="number">{{TOTAL}}</div>
            <div class="label">إجمالي المهام</div>
        </div>
        <div class="stat-box completed">
            <div class="number">{{COMPLETED}}</div>
            <div class="label">مكتملة</div>
        </div>
        <div class="stat-box pending">
            <div class="number">{{PENDING}}</div>
            <div class="label">قيد التنفيذ</div>
        </div>
    </div>

    <div class="today-one-thing">
        <strong>🎯 Today One Thing</strong><br>
        {{TODAY_ONE_THING}}
    </div>

    <div class="section">
        <h2>⭐ أهم 3 مهام</h2>
        <table>
            <thead>
                <tr>
                    <th width="10%">#</th>
                    <th width="70%">المهمة</th>
                    <th width="20%">الحالة</th>
                </tr>
            </thead>
            <tbody>
                {{TOP_3_TASKS}}
            </tbody>
        </table>
    </div>

    <div class="section">
        <h2>📝 جميع المهام</h2>
        <table>
            <thead>
                <tr>
                    <th width="50%">المهمة</th>
                    <th width="25%">الحالة</th>
                    <th width="25%">ملاحظات</th>
                </tr>
            </thead>
            <tbody>
                {{ALL_TASKS}}
            </tbody>
        </table>
    </div>

    <div class="footer">
        تم إنشاء هذا التقرير بواسطة Decision OS | © {{DATE}}
    </div>
</body>
</html>
HTML;
    }

    /**
     * الحصول على التاريخ بالعربية
     */
    private function getArabicDate(): string
    {
        $days = ['الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'];
        $months = ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'];

        $dayOfWeek = $days[now()->dayOfWeek];
        $day = now()->day;
        $month = $months[now()->month - 1];
        $year = now()->year;

        return "{$dayOfWeek}، {$day} {$month} {$year}";
    }
}
