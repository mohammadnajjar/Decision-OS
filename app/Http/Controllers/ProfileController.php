<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Reset all user data (keeps account but clears all data).
     */
    public function resetAccount(Request $request): RedirectResponse
    {
        $request->validateWithBag('accountReset', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        DB::transaction(function () use ($user) {
            // حذف جميع البيانات المرتبطة بالمستخدم

            // المهام والمشاريع
            $user->tasks()->delete();
            $user->projects()->each(function ($project) {
                $project->attachments()->delete();
                $project->delete();
            });

            // جلسات البومودورو
            $user->pomodoroSessions()->delete();

            // البيانات المالية
            $user->expenses()->delete();
            $user->incomes()->delete();
            $user->expenseCategories()->delete();
            $user->accounts()->delete();
            $user->debts()->each(function ($debt) {
                $debt->payments()->delete();
                $debt->delete();
            });

            // العملاء والقرارات
            $user->clients()->delete();
            $user->decisions()->delete();

            // المقاييس والمراجعات
            $user->metricValues()->delete();
            $user->weeklyReviews()->delete();

            // الأهداف السنوية
            $user->yearlyGoals()->delete();

            // بيانات القرآن
            $user->quranProgress()->delete();

            // البيانات المهنية
            $user->careerData()->delete();
            $user->businessAssets()->delete();

            // إعادة تعيين بيانات المستخدم
            $user->update([
                'onboarding_completed' => false,
                'profile_type' => null,
                'starting_balance' => 0,
                'cash_on_hand' => 0,
                'monthly_income' => 0,
                'monthly_expenses' => 0,
            ]);
        });

        return Redirect::route('onboarding.select-profile')->with('status', 'account-reset');
    }
}
