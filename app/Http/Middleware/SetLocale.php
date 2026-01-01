<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // الحصول على اللغة من الجلسة أو استخدام العربي كافتراضي
        $locale = Session::get('locale', config('app.locale', 'ar'));

        // التحقق من أن اللغة متاحة
        $availableLocales = config('app.available_locales', ['ar', 'en']);

        if (!in_array($locale, $availableLocales)) {
            $locale = 'ar';
        }

        App::setLocale($locale);

        return $next($request);
    }
}
