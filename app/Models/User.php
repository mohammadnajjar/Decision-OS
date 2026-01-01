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
     * Get all financial accounts
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }

    /**
     * Get all debts (payable and receivable)
     */
    public function debts(): HasMany
    {
        return $this->hasMany(Debt::class);
    }

    /**
     * Get debts I owe (payable)
     */
    public function payableDebts(): HasMany
    {
        return $this->hasMany(Debt::class)->where('type', 'payable');
    }

    /**
     * Get debts owed to me (receivable)
     */
    public function receivableDebts(): HasMany
    {
        return $this->hasMany(Debt::class)->where('type', 'receivable');
    }

    /**
     * Get default account
     */
    public function defaultAccount()
    {
        return $this->accounts()->where('is_default', true)->first();
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

    /**
     * Get user's expenses.
     */
    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }

    /**
     * Get user's incomes.
     */
    public function incomes(): HasMany
    {
        return $this->hasMany(Income::class);
    }

    /**
     * Get user's expense categories.
     */
    public function expenseCategories(): HasMany
    {
        return $this->hasMany(ExpenseCategory::class);
    }

    /**
     * Get user's clients.
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    /**
     * Get user's decisions.
     */
    public function decisions(): HasMany
    {
        return $this->hasMany(Decision::class);
    }

    /**
     * Get user's projects.
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    /**
     * Get user's yearly goals.
     */
    public function yearlyGoals(): HasMany
    {
        return $this->hasMany(YearlyGoal::class);
    }

    /**
     * Get user's quran progress.
     */
    public function quranProgress(): HasMany
    {
        return $this->hasMany(QuranProgress::class);
    }

    /**
     * Get user's career data.
     */
    public function careerData(): HasMany
    {
        return $this->hasMany(CareerData::class);
    }

    /**
     * Get user's business assets.
     */
    public function businessAssets(): HasMany
    {
        return $this->hasMany(BusinessAsset::class);
    }

    /**
     * Get user's zakat settings.
     */
    public function zakatSetting()
    {
        return $this->hasOne(ZakatSetting::class);
    }

    /**
     * Get user's zakat payments.
     */
    public function zakatPayments(): HasMany
    {
        return $this->hasMany(ZakatPayment::class);
    }

    /**
     * Get or create zakat settings for user.
     */
    public function getOrCreateZakatSetting(): ZakatSetting
    {
        return $this->zakatSetting ?? $this->zakatSetting()->create([
            'currency' => $this->currency ?? 'SAR',
        ]);
    }

    /**
     * Get zakatable accounts (for zakat calculation).
     */
    public function zakatableAccounts()
    {
        return $this->accounts()->where('is_zakatable', true);
    }
}
