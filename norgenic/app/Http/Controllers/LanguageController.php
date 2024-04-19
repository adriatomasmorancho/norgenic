<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LanguageController extends Controller
{
    public function changeAppLocaleTo(Request $request)
    {
        $envFile = base_path('.env');

        $contents = File::get($envFile);

        if($request->input('language') == "es"){

            $contents = preg_replace('/^APP_LOCALE=.*/m', 'APP_LOCALE=es', $contents);

        }else{

            $contents = preg_replace('/^APP_LOCALE=.*/m', 'APP_LOCALE=en', $contents);

        }


        File::put($envFile, $contents);

        return redirect()->back();
    }
}
