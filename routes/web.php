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
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BusinessAssetController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Language Switcher
|--------------------------------------------------------------------------
*/
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('/', function () {
    return redirect()->route('decision-os.dashboard');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return redirect()->route('decision-os.dashboard');
})->middleware(['auth'])->name('dashboard');

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
    Route::get('/onboarding/setup', [OnboardingController::class, 'showSetup'])->name('onboarding.setup');
    Route::post('/onboarding/setup', [OnboardingController::class, 'storeSetup'])->name('onboarding.setup.store');
});

/*
|--------------------------------------------------------------------------
| Decision OS Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('decision-os')->name('decision-os.')->group(function () {

    // Dashboard
    Route::get('/', [DecisionDashboardController::class, 'index'])->name('dashboard');

    // Quick Daily Input Page
    Route::get('/daily-input', [DecisionDashboardController::class, 'dailyInput'])->name('daily-input');

    // Metrics
    Route::get('/metrics', [MetricController::class, 'index'])->name('metrics.index');
    Route::get('/metrics/history', [MetricController::class, 'history'])->name('metrics.history');
    Route::post('/metrics', [MetricController::class, 'store'])->name('metrics.store');

    // Tasks - Today One Thing
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/today', [TaskController::class, 'today'])->name('tasks.today');
    Route::get('/tasks/export', [TaskController::class, 'exportPdf'])->name('tasks.export');
    Route::get('/tasks/download', [TaskController::class, 'downloadTasks'])->name('tasks.download');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::post('/tasks/today', [TaskController::class, 'store'])->name('tasks.set-today');
    Route::patch('/tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
    Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
    Route::patch('/tasks/{task}/reset', [TaskController::class, 'reset'])->name('tasks.reset');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

    // Pomodoro API
    Route::get('/pomodoro', [PomodoroController::class, 'index'])->name('pomodoro.index');
    Route::get('/pomodoro/history', [PomodoroController::class, 'history'])->name('pomodoro.history');
    Route::post('/pomodoro/start', [PomodoroController::class, 'start'])->name('pomodoro.start');
    Route::post('/pomodoro/{session}/complete', [PomodoroController::class, 'complete'])->name('pomodoro.complete');
    Route::post('/pomodoro/{session}/interrupt', [PomodoroController::class, 'interrupt'])->name('pomodoro.interrupt');
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
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::post('/projects/{project}/revenue', [ProjectController::class, 'updateRevenue'])->name('projects.update-revenue');
    Route::post('/projects/{project}/hours', [ProjectController::class, 'logHours'])->name('projects.log-hours');
    Route::get('/projects/{project}/kanban', [ProjectController::class, 'kanban'])->name('projects.kanban');
    Route::post('/projects/{project}/tasks', [ProjectController::class, 'addTask'])->name('projects.add-task');
    Route::patch('/projects/{project}/tasks/{task}/status', [ProjectController::class, 'updateTaskStatus'])->name('projects.update-task-status');
    Route::post('/projects/{project}/attachments', [ProjectController::class, 'uploadAttachment'])->name('projects.upload-attachment');
    Route::delete('/projects/{project}/attachments/{attachment}', [ProjectController::class, 'deleteAttachment'])->name('projects.delete-attachment');
    Route::get('/projects/{project}/attachments/{attachment}/download', [ProjectController::class, 'downloadAttachment'])->name('projects.download-attachment');

    // Yearly Goals
    Route::get('/goals', [\App\Http\Controllers\YearlyGoalController::class, 'index'])->name('goals.index');
    Route::get('/goals/create', [\App\Http\Controllers\YearlyGoalController::class, 'create'])->name('goals.create');
    Route::post('/goals', [\App\Http\Controllers\YearlyGoalController::class, 'store'])->name('goals.store');
    Route::get('/goals/{goal}/edit', [\App\Http\Controllers\YearlyGoalController::class, 'edit'])->name('goals.edit');
    Route::put('/goals/{goal}', [\App\Http\Controllers\YearlyGoalController::class, 'update'])->name('goals.update');
    Route::patch('/goals/{goal}/progress', [\App\Http\Controllers\YearlyGoalController::class, 'updateProgress'])->name('goals.update-progress');
    Route::delete('/goals/{goal}', [\App\Http\Controllers\YearlyGoalController::class, 'destroy'])->name('goals.destroy');

    // Clients (Client Health)
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
    Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');

    // Expenses (Daily Expense Tracking)
    Route::get('/expenses', [\App\Http\Controllers\ExpenseController::class, 'index'])->name('expenses.index');
    Route::get('/expenses/create', [\App\Http\Controllers\ExpenseController::class, 'create'])->name('expenses.create');
    Route::post('/expenses', [\App\Http\Controllers\ExpenseController::class, 'store'])->name('expenses.store');
    Route::post('/expenses/quick', [\App\Http\Controllers\ExpenseController::class, 'quickStore'])->name('expenses.quick-store');
    Route::delete('/expenses/{expense}', [\App\Http\Controllers\ExpenseController::class, 'destroy'])->name('expenses.destroy');

    // Incomes
    Route::get('/incomes', [\App\Http\Controllers\IncomeController::class, 'index'])->name('incomes.index');
    Route::get('/incomes/create', [\App\Http\Controllers\IncomeController::class, 'create'])->name('incomes.create');
    Route::post('/incomes', [\App\Http\Controllers\IncomeController::class, 'store'])->name('incomes.store');
    Route::delete('/incomes/{income}', [\App\Http\Controllers\IncomeController::class, 'destroy'])->name('incomes.destroy');

    // Expense Categories
    Route::get('/expense-categories', [\App\Http\Controllers\ExpenseCategoryController::class, 'index'])->name('expense-categories.index');
    Route::get('/expense-categories/create', [\App\Http\Controllers\ExpenseCategoryController::class, 'create'])->name('expense-categories.create');
    Route::post('/expense-categories', [\App\Http\Controllers\ExpenseCategoryController::class, 'store'])->name('expense-categories.store');
    Route::get('/expense-categories/{expenseCategory}/edit', [\App\Http\Controllers\ExpenseCategoryController::class, 'edit'])->name('expense-categories.edit');
    Route::put('/expense-categories/{expenseCategory}', [\App\Http\Controllers\ExpenseCategoryController::class, 'update'])->name('expense-categories.update');
    Route::delete('/expense-categories/{expenseCategory}', [\App\Http\Controllers\ExpenseCategoryController::class, 'destroy'])->name('expense-categories.destroy');

    // Quran Progress (ختمة القرآن)
    Route::get('/quran', [\App\Http\Controllers\QuranProgressController::class, 'index'])->name('quran.index');
    Route::post('/quran/log-reading', [\App\Http\Controllers\QuranProgressController::class, 'logReading'])->name('quran.log-reading');
    Route::post('/quran/update-position', [\App\Http\Controllers\QuranProgressController::class, 'updatePosition'])->name('quran.update-position');
    Route::post('/quran/update-notes', [\App\Http\Controllers\QuranProgressController::class, 'updateNotes'])->name('quran.update-notes');
    Route::post('/quran/start-new', [\App\Http\Controllers\QuranProgressController::class, 'startNewKhatma'])->name('quran.start-new');
    Route::post('/quran/reset', [\App\Http\Controllers\QuranProgressController::class, 'reset'])->name('quran.reset');

    // Adhkar (الأذكار)
    Route::get('/adhkar', [\App\Http\Controllers\AdhkarController::class, 'index'])->name('adhkar');
    Route::get('/adhkar/morning', [\App\Http\Controllers\AdhkarController::class, 'morning'])->name('adhkar.morning');
    Route::get('/adhkar/evening', [\App\Http\Controllers\AdhkarController::class, 'evening'])->name('adhkar.evening');

    // Career / Work Growth (التطور المهني)
    Route::get('/career', [CareerController::class, 'index'])->name('career.index');
    Route::get('/career/create', [CareerController::class, 'create'])->name('career.create');
    Route::post('/career', [CareerController::class, 'store'])->name('career.store');
    Route::get('/career/{career}', [CareerController::class, 'show'])->name('career.show');
    Route::put('/career/{career}', [CareerController::class, 'update'])->name('career.update');

    // Business & Assets (الأصول والأعمال - مقفول بالبداية)
    Route::get('/business', [BusinessAssetController::class, 'index'])->name('business.index');
    Route::get('/business/create', [BusinessAssetController::class, 'create'])->name('business.create');
    Route::post('/business', [BusinessAssetController::class, 'store'])->name('business.store');
    Route::get('/business/{business}', [BusinessAssetController::class, 'show'])->name('business.show');
    Route::get('/business/{business}/edit', [BusinessAssetController::class, 'edit'])->name('business.edit');
    Route::put('/business/{business}', [BusinessAssetController::class, 'update'])->name('business.update');
    Route::delete('/business/{business}', [BusinessAssetController::class, 'destroy'])->name('business.destroy');
});

require __DIR__.'/auth.php';
