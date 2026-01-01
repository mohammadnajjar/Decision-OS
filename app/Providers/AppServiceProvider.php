<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;
use App\Models\Debt;
use App\Policies\DebtPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ضبط لغة Carbon بناءً على locale التطبيق
        Carbon::setLocale(App::getLocale());

        // Register Debt Policy
        Gate::policy(Debt::class, DebtPolicy::class);
    }
}
