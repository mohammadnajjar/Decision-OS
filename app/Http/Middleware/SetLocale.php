<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     * يستخدم لغة المستخدم المحفوظة في قاعدة البيانات أو الجلسة
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $availableLocales = config('app.available_locales', ['ar', 'en']);
        $defaultLocale = config('app.locale', 'ar');

        // الأولوية: 1. لغة المستخدم المسجل 2. الجلسة 3. الافتراضي
        if (Auth::check() && Auth::user()->locale) {
            $locale = Auth::user()->locale;
        } else {
            $locale = session('locale', $defaultLocale);
        }

        // التحقق من أن اللغة متاحة
        if (!in_array($locale, $availableLocales)) {
            $locale = $defaultLocale;
        }

        App::setLocale($locale);

        // ضبط لغة Carbon لترجمة التواريخ
        Carbon::setLocale($locale);

        // حفظ dir في الجلسة لاستخدامه في الـ Blade
        $dir = $locale === 'ar' ? 'rtl' : 'ltr';
        session(['dir' => $dir]);

        return $next($request);
    }
}
