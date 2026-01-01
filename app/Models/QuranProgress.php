<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuranProgress extends Model
{
    protected $table = 'quran_progress';

    protected $fillable = [
        'user_id',
        'year',
        'month',
        'target_pages',
        'completed_pages',
        'current_juz',
        'current_surah',
        'current_page',
        'last_read_date',
        'notes',
        'status',
    ];

    protected $casts = [
        'last_read_date' => 'date',
    ];

    /**
     * القرآن الكريم: 30 جزء، 604 صفحة
     */
    public const TOTAL_PAGES = 604;
    public const TOTAL_JUZ = 30;

    /**
     * أسماء الأجزاء
     */
    public const JUZ_NAMES = [
        1 => 'الم',
        2 => 'سيقول',
        3 => 'تلك الرسل',
        4 => 'لن تنالوا',
        5 => 'والمحصنات',
        6 => 'لا يحب الله',
        7 => 'وإذا سمعوا',
        8 => 'ولو أننا',
        9 => 'قال الملأ',
        10 => 'واعلموا',
        11 => 'يعتذرون',
        12 => 'وما من دابة',
        13 => 'وما أبرئ',
        14 => 'ربما',
        15 => 'سبحان',
        16 => 'قال ألم',
        17 => 'اقترب',
        18 => 'قد أفلح',
        19 => 'وقال الذين',
        20 => 'أمن خلق',
        21 => 'اتل ما أوحي',
        22 => 'ومن يقنت',
        23 => 'وما لي',
        24 => 'فمن أظلم',
        25 => 'إليه يرد',
        26 => 'حم',
        27 => 'قال فما خطبكم',
        28 => 'قد سمع',
        29 => 'تبارك',
        30 => 'عم',
    ];

    /**
     * العلاقة مع المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * حساب نسبة التقدم
     */
    public function getProgressPercentageAttribute(): float
    {
        if ($this->target_pages == 0) return 0;
        return round(($this->completed_pages / $this->target_pages) * 100, 1);
    }

    /**
     * حساب الصفحات المتبقية
     */
    public function getRemainingPagesAttribute(): int
    {
        return max(0, $this->target_pages - $this->completed_pages);
    }

    /**
     * حساب الصفحات المطلوبة يومياً لإكمال الختمة
     */
    public function getDailyPagesNeededAttribute(): float
    {
        $daysRemaining = now()->daysInMonth - now()->day + 1;
        if ($daysRemaining <= 0) return 0;
        return round($this->remaining_pages / $daysRemaining, 1);
    }

    /**
     * تحديد حالة الختمة (Status)
     */
    public function calculateStatus(): string
    {
        $percentage = $this->progress_percentage;
        $dayOfMonth = now()->day;
        $daysInMonth = now()->daysInMonth;
        $expectedPercentage = ($dayOfMonth / $daysInMonth) * 100;

        // مكتمل
        if ($percentage >= 100) {
            return 'green';
        }

        // متقدم أو في الموعد
        if ($percentage >= $expectedPercentage - 5) {
            return 'green';
        }

        // متأخر قليلاً
        if ($percentage >= $expectedPercentage - 20) {
            return 'yellow';
        }

        // متأخر كثيراً
        return 'red';
    }

    /**
     * الحصول على ختمة الشهر الحالي
     */
    public static function getCurrentMonth(int $userId): ?self
    {
        return static::where('user_id', $userId)
            ->where('year', now()->year)
            ->where('month', now()->month)
            ->first();
    }

    /**
     * إنشاء ختمة جديدة للشهر الحالي
     */
    public static function createForCurrentMonth(int $userId): self
    {
        return static::create([
            'user_id' => $userId,
            'year' => now()->year,
            'month' => now()->month,
            'target_pages' => self::TOTAL_PAGES,
            'completed_pages' => 0,
            'current_juz' => 1,
            'current_page' => 1,
            'status' => 'not_started',
        ]);
    }

    /**
     * تسجيل قراءة صفحات
     */
    public function logReading(int $pages): void
    {
        $this->completed_pages = min($this->target_pages, $this->completed_pages + $pages);
        $this->current_page = min(self::TOTAL_PAGES, $this->current_page + $pages);
        $this->current_juz = (int) ceil($this->current_page / 20.13); // ~20 صفحة لكل جزء
        $this->last_read_date = now();

        if ($this->completed_pages >= $this->target_pages) {
            $this->status = 'completed';
        } else {
            $this->status = 'in_progress';
        }

        $this->save();
    }

    /**
     * اسم الجزء الحالي
     */
    public function getCurrentJuzNameAttribute(): string
    {
        return self::JUZ_NAMES[$this->current_juz] ?? '';
    }

    /**
     * اسم الشهر بالعربي
     */
    public function getMonthNameAttribute(): string
    {
        $months = [
            1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل',
            5 => 'مايو', 6 => 'يونيو', 7 => 'يوليو', 8 => 'أغسطس',
            9 => 'سبتمبر', 10 => 'أكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر',
        ];
        return $months[$this->month] ?? '';
    }
}
