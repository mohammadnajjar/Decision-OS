<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DecisionDashboardController;
use App\Http\Controllers\MetricController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PomodoroController;
use App\Http\Controllers\WeeklyReviewController;
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
| Decision OS Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('decision-os')->name('decision-os.')->group(function () {

    // Dashboard
    Route::get('/', [DecisionDashboardController::class, 'index'])->name('dashboard');

    // Metrics
    Route::get('/metrics', [MetricController::class, 'input'])->name('metrics.input');
    Route::post('/metrics', [MetricController::class, 'store'])->name('metrics.store');

    // Tasks - Today One Thing
    Route::get('/tasks/today', [TaskController::class, 'today'])->name('tasks.today');
    Route::post('/tasks/today', [TaskController::class, 'setToday'])->name('tasks.set-today');
    Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
    Route::patch('/tasks/{task}/reset', [TaskController::class, 'reset'])->name('tasks.reset');

    // Pomodoro API
    Route::post('/pomodoro/start', [PomodoroController::class, 'start'])->name('pomodoro.start');
    Route::post('/pomodoro/{session}/complete', [PomodoroController::class, 'complete'])->name('pomodoro.complete');
    Route::get('/pomodoro/stats', [PomodoroController::class, 'stats'])->name('pomodoro.stats');

    // Weekly Review
    Route::get('/weekly-review', [WeeklyReviewController::class, 'index'])->name('weekly-review.index');
    Route::get('/weekly-review/create', [WeeklyReviewController::class, 'create'])->name('weekly-review.create');
    Route::post('/weekly-review', [WeeklyReviewController::class, 'store'])->name('weekly-review.store');
    Route::get('/weekly-review/{review}', [WeeklyReviewController::class, 'show'])->name('weekly-review.show');
});

require __DIR__.'/auth.php';
