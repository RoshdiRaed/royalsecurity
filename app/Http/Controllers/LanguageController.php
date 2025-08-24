<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLocale(Request $request, $locale)
    {
        if (in_array($locale, ['en', 'ar'])) {
            Session::put('locale', $locale);
            app()->setLocale($locale);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'error' => 'Invalid locale'], 400);
    }
}
