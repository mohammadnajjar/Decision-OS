<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile',
        'starting_balance',
        'starting_balance_date',
        'currency',
        'timezone',
        'locale',
        'onboarding_completed',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'starting_balance' => 'decimal:2',
            'starting_balance_date' => 'date',
            'onboarding_completed' => 'boolean',
        ];
    }

    /**
     * حساب Cash On Hand
     * starting_balance + total_income - total_expenses
     */
    public function getCashOnHandAttribute(): float
    {
        $totalIncome = Income::where('user_id', $this->id)->sum('amount');
        $totalExpenses = Expense::where('user_id', $this->id)->sum('amount');

        return (float) $this->starting_balance + $totalIncome - $totalExpenses;
    }

    /**
     * Get user's metric values.
     */
    public function metricValues(): HasMany
    {
        return $this->hasMany(MetricValue::class);
    }

    /**
     * Get user's tasks.
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Get user's pomodoro sessions.
     */
    public function pomodoroSessions(): HasMany
    {
        return $this->hasMany(PomodoroSession::class);
    }

    /**
     * Get user's weekly reviews.
     */
    public function weeklyReviews(): HasMany
    {
        return $this->hasMany(WeeklyReview::class);
    }

    /**
     * Check if user is a freelancer.
     */
    public function isFreelancer(): bool
    {
        return $this->profile === 'freelancer';
    }

    /**
     * Check if user is an employee.
     */
    public function isEmployee(): bool
    {
        return $this->profile === 'employee';
    }

    /**
     * Check if user is a founder.
     */
    public function isFounder(): bool
    {
        return $this->profile === 'founder';
    }
}
