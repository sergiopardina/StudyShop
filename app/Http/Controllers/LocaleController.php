<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController
{
    public function update(Request $request)
    {
        $locale = $request->input('locale');

        if (!in_array($locale, ['en', 'uk'])) {
            $locale = 'en';
        }

        session()->put('locale', $locale);

        return redirect()->back();
    }
}
