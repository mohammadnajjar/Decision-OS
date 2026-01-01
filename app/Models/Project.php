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
        'priority',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'total_revenue' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    const STATUSES = [
        'active' => 'نشط',
        'completed' => 'مكتمل',
        'paused' => 'متوقف',
        'cancelled' => 'ملغي',
    ];

    const PRIORITIES = [
        'low' => 'منخفضة',
        'medium' => 'متوسطة',
        'high' => 'عالية',
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
     * Get attachments for this project.
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(ProjectAttachment::class);
    }

    /**
     * Get priority label in Arabic.
     */
    public function getPriorityLabelAttribute(): string
    {
        return self::PRIORITIES[$this->priority] ?? $this->priority;
    }

    /**
     * Get status label in Arabic.
     */
    public function getStatusLabelAttribute(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }

    /**
     * Get priority color.
     */
    public function getPriorityColorAttribute(): string
    {
        return match($this->priority) {
            'high' => 'danger',
            'medium' => 'warning',
            'low' => 'secondary',
            default => 'secondary',
        };
    }

    /**
     * Get status color.
     */
    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'active' => 'primary',
            'completed' => 'success',
            'paused' => 'warning',
            'cancelled' => 'danger',
            default => 'secondary',
        };
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
