<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage(Request $request, $language)
    {
        if (in_array($language, ['en', 'mr'])) {
            Session::put('language', $language);
        } else {
            Session::put('language', 'mr'); // Set default language to English
        }
        return redirect()->back();
    }
}
