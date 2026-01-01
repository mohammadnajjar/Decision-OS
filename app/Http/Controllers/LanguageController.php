<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * تبديل اللغة
     */
    public function switch(Request $request, string $locale)
    {
        $availableLocales = config('app.available_locales', ['ar', 'en']);

        if (!in_array($locale, $availableLocales)) {
            $locale = 'ar';
        }

        Session::put('locale', $locale);
        App::setLocale($locale);

        return redirect()->back();
    }
}
