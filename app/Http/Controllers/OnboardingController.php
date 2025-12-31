<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnboardingController extends Controller
{
    /**
     * عرض صفحة اختيار الـ Profile
     */
    public function selectProfile()
    {
        // إذا المستخدم عنده profile، يروح للـ Dashboard
        if (Auth::user()->profile) {
            return redirect()->route('decision-os.dashboard');
        }

        return view('onboarding.profile-select');
    }

    /**
     * حفظ الـ Profile وتفعيل Modules المناسبة
     */
    public function storeProfile(Request $request)
    {
        $validated = $request->validate([
            'profile' => 'required|in:freelancer,employee,founder',
        ]);

        $user = Auth::user();
        $user->profile = $validated['profile'];
        $user->save();

        // TODO: تفعيل Modules بناءً على الـ Profile
        // Freelancer: Life, Financial, Focus, Pomodoro, Clients, Projects
        // Employee: Life, Focus, Pomodoro, Career
        // Founder: All modules

        return redirect()->route('decision-os.dashboard')
                        ->with('success', 'مرحباً بك في Decision OS! 🚀');
    }
}
