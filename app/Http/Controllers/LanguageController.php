<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    /**
     * تبديل اللغة - يحفظ في قاعدة البيانات للمستخدم المسجل
     */
    public function switch(Request $request, string $locale)
    {
        $availableLocales = config('app.available_locales', ['ar', 'en']);

        if (!in_array($locale, $availableLocales)) {
            $locale = 'ar';
        }

        // حفظ في قاعدة البيانات للمستخدم المسجل
        if (Auth::check()) {
            Auth::user()->update(['locale' => $locale]);
        }

        // حفظ في الجلسة أيضاً للضيوف
        session(['locale' => $locale]);

        App::setLocale($locale);

        return redirect()->back();
    }
}
