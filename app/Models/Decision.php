<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Decision extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'context',
        'reason',
        'expected_outcome',
        'review_date',
        'actual_outcome',
        'result',
        'lessons_learned',
    ];

    protected $casts = [
        'review_date' => 'date',
    ];

    /**
     * العلاقة مع المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * القرارات المعلقة للمراجعة
     */
    public function scopePendingReview($query)
    {
        return $query->where('result', 'pending')
                     ->where('review_date', '<=', now());
    }

    /**
     * القرارات الرابحة
     */
    public function scopeWins($query)
    {
        return $query->where('result', 'win');
    }

    /**
     * القرارات الخاسرة
     */
    public function scopeLosses($query)
    {
        return $query->where('result', 'lose');
    }

    /**
     * حساب نسبة الفوز
     */
    public static function getWinRate(int $userId): float
    {
        $total = self::where('user_id', $userId)
                     ->whereIn('result', ['win', 'lose'])
                     ->count();

        if ($total === 0) return 0;

        $wins = self::where('user_id', $userId)
                    ->where('result', 'win')
                    ->count();

        return round(($wins / $total) * 100, 1);
    }
}
