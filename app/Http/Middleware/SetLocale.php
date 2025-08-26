<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // تحقق إذا يوجد ?lang=ar أو ?lang=en
        if ($request->has('lang')) {
            session(['locale' => $request->get('lang')]);
        }

        // ضبط لغة التطبيق من session أو الانجليزية كافتراضي
        App::setLocale(session('locale', 'en'));

        return $next($request);
    }
}
