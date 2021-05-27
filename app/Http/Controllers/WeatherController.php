<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function search(){
        $locales_json = json_decode( file_get_contents( 'base/locales.json' ) );
        $weather_json = json_decode( file_get_contents( 'base/weather.json' ) );
        $locale_name = 'São Paulo';

        foreach ($weather_json as $weather) {
            if ($weather->locale->name === $locale_name ) {
                return view('home',['weathers'=>$weather->weather,'locale'=>$weather->locale]);
            }
        }
        #dd($locales_json);
        #dd($weather_json);

    }
}
