<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class CareerData extends Model
{
    use HasFactory;

    protected $table = 'career_data';

    protected $fillable = [
        'user_id',
        'date',
        'cv_status',
        'applications_count',
        'interviews_count',
        'skill_hours',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
        'applications_count' => 'integer',
        'interviews_count' => 'integer',
        'skill_hours' => 'decimal:2',
    ];

    /**
     * العلاقة مع المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * حالة CV بالعربي
     */
    public static function cvStatusLabels(): array
    {
        return [
            'draft' => 'مسودة',
            'ready' => 'جاهز',
            'sent' => 'تم الإرسال',
        ];
    }

    /**
     * الحصول على حالة CV الحالية
     */
    public static function getCurrentCvStatus(int $userId): string
    {
        $latest = self::where('user_id', $userId)
            ->whereNotNull('cv_status')
            ->latest('date')
            ->first();

        return $latest?->cv_status ?? 'draft';
    }

    /**
     * عدد التقديمات هذا الأسبوع
     */
    public static function getWeeklyApplications(int $userId): int
    {
        return self::where('user_id', $userId)
            ->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])
            ->sum('applications_count');
    }

    /**
     * عدد المقابلات هذا الشهر
     */
    public static function getMonthlyInterviews(int $userId): int
    {
        return self::where('user_id', $userId)
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('interviews_count');
    }

    /**
     * ساعات تطوير المهارات هذا الأسبوع
     */
    public static function getWeeklySkillHours(int $userId): float
    {
        return (float) self::where('user_id', $userId)
            ->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])
            ->sum('skill_hours');
    }

    /**
     * الحصول على بيانات اليوم
     */
    public static function getToday(int $userId): ?self
    {
        return self::where('user_id', $userId)
            ->whereDate('date', today())
            ->first();
    }

    /**
     * تسجيل أو تحديث بيانات اليوم
     */
    public static function logToday(int $userId, array $data): self
    {
        return self::updateOrCreate(
            ['user_id' => $userId, 'date' => today()],
            $data
        );
    }

    /**
     * حساب نسبة التقدم المهني
     */
    public static function getCareerProgress(int $userId): int
    {
        $cvStatus = self::getCurrentCvStatus($userId);
        $weeklyApps = self::getWeeklyApplications($userId);
        $monthlyInterviews = self::getMonthlyInterviews($userId);
        $skillHours = self::getWeeklySkillHours($userId);

        // حساب النسبة
        $cvScore = match($cvStatus) {
            'sent' => 100,
            'ready' => 70,
            'draft' => 30,
            default => 0,
        };

        $appsScore = min(100, ($weeklyApps / 5) * 100); // هدف 5 تقديمات/أسبوع
        $interviewsScore = min(100, ($monthlyInterviews / 4) * 100); // هدف 4 مقابلات/شهر
        $skillScore = min(100, ($skillHours / 10) * 100); // هدف 10 ساعات/أسبوع

        return (int) (($cvScore + $appsScore + $interviewsScore + $skillScore) / 4);
    }
}
