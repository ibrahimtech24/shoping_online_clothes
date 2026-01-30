<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        if (in_array($locale, ['ku', 'en', 'ar'])) {
            // Store locale in cookie for 1 year (525600 minutes)
            Cookie::queue('locale', $locale, 525600);
        }
        
        return redirect()->back();
    }
}
