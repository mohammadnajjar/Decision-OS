<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DecisionDashboardController;
use App\Http\Controllers\MetricController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PomodoroController;
use App\Http\Controllers\WeeklyReviewController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OnboardingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Onboarding Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/onboarding', [OnboardingController::class, 'selectProfile'])->name('onboarding.select-profile');
    Route::post('/onboarding', [OnboardingController::class, 'storeProfile'])->name('onboarding.store-profile');
});

/*
|--------------------------------------------------------------------------
| Decision OS Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('decision-os')->name('decision-os.')->group(function () {

    // Dashboard
    Route::get('/', [DecisionDashboardController::class, 'index'])->name('dashboard');

    // Metrics
    Route::get('/metrics', [MetricController::class, 'input'])->name('metrics.input');
    Route::get('/metrics', [MetricController::class, 'input'])->name('metrics.index');
    Route::post('/metrics', [MetricController::class, 'store'])->name('metrics.store');

    // Tasks - Today One Thing
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/today', [TaskController::class, 'today'])->name('tasks.today');
    Route::post('/tasks/today', [TaskController::class, 'setToday'])->name('tasks.set-today');
    Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
    Route::patch('/tasks/{task}/reset', [TaskController::class, 'reset'])->name('tasks.reset');

    // Pomodoro API
    Route::get('/pomodoro/history', [PomodoroController::class, 'history'])->name('pomodoro.history');
    Route::post('/pomodoro/start', [PomodoroController::class, 'start'])->name('pomodoro.start');
    Route::post('/pomodoro/{session}/complete', [PomodoroController::class, 'complete'])->name('pomodoro.complete');
    Route::get('/pomodoro/stats', [PomodoroController::class, 'stats'])->name('pomodoro.stats');

    // Weekly Review
    Route::get('/weekly-review', [WeeklyReviewController::class, 'index'])->name('weekly-review.index');
    Route::get('/weekly-review/create', [WeeklyReviewController::class, 'create'])->name('weekly-review.create');
    Route::post('/weekly-review', [WeeklyReviewController::class, 'store'])->name('weekly-review.store');
    Route::get('/weekly-review/{review}', [WeeklyReviewController::class, 'show'])->name('weekly-review.show');

    // Decision Log
    Route::get('/decisions', [DecisionController::class, 'index'])->name('decisions.index');
    Route::get('/decisions/create', [DecisionController::class, 'create'])->name('decisions.create');
    Route::post('/decisions', [DecisionController::class, 'store'])->name('decisions.store');
    Route::get('/decisions/{decision}', [DecisionController::class, 'show'])->name('decisions.show');
    Route::get('/decisions/{decision}/review', [DecisionController::class, 'review'])->name('decisions.review');
    Route::post('/decisions/{decision}/review', [DecisionController::class, 'storeReview'])->name('decisions.store-review');

    // Projects (Time → Money)
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
    Route::post('/projects/{project}/revenue', [ProjectController::class, 'updateRevenue'])->name('projects.update-revenue');
    Route::post('/projects/{project}/hours', [ProjectController::class, 'logHours'])->name('projects.log-hours');

    // Clients (Client Health)
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
    Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
});

require __DIR__.'/auth.php';
