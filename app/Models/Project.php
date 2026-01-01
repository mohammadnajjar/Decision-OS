<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_id',
        'name',
        'description',
        'total_revenue',
        'total_hours',
        'total_pomodoros',
        'status',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'total_revenue' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * العلاقة مع المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * العلاقة مع العميل
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * جلسات Pomodoro المرتبطة
     */
    public function pomodoroSessions(): HasMany
    {
        return $this->hasMany(PomodoroSession::class);
    }

    /**
     * حساب Revenue per Hour
     */
    public function getRevenuePerHourAttribute(): float
    {
        if ($this->total_hours === 0) return 0;

        $hours = $this->total_hours / 60; // تحويل من دقائق لساعات
        return round($this->total_revenue / $hours, 2);
    }

    /**
     * حساب Revenue per Pomodoro
     */
    public function getRevenuePerPomodoroAttribute(): float
    {
        if ($this->total_pomodoros === 0) return 0;

        return round($this->total_revenue / $this->total_pomodoros, 2);
    }

    /**
     * Get tasks for this project.
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    /**
     * تحديد حالة المشروع (مربح/خاسر)
     * بناءً على Revenue per Hour
     */
    public function getProfitabilityStatusAttribute(): string
    {
        $rph = $this->revenue_per_hour;

        if ($rph >= 50) return 'green';  // مربح
        if ($rph >= 25) return 'yellow'; // متوسط
        return 'red'; // خاسر زمنياً
    }

    /**
     * المشاريع النشطة
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * تحديث إحصائيات المشروع من Pomodoro
     */
    public function updateStatsFromPomodoro(): void
    {
        $stats = $this->pomodoroSessions()
                      ->where('status', 'completed')
                      ->selectRaw('COUNT(*) as count, SUM(duration) as total_duration')
                      ->first();

        $this->total_pomodoros = $stats->count ?? 0;
        $this->total_hours = ($stats->total_duration ?? 0) / 60; // تحويل ثواني لدقائق
        $this->save();
    }
}
