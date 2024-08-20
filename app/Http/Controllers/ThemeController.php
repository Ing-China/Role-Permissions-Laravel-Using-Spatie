<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function switchTheme(Request $request)
    {
        $theme = $request->input('theme');
        session(['theme' => $theme]);
        return response()->json(['status' => 'Theme switched to ' . $theme]);
    }
}
