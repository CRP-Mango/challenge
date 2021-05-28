<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(Request $request){
        $locales_json = json_decode( file_get_contents( 'base/locales.json' ) );
        $weather_json = json_decode( file_get_contents( 'base/weather.json' ) );

        $locale2 = $request->all();
        #dd($locale2);

        return view('index',
        [
            'climates'  =>  $weather_json
        ]);
    }

    public function search(Request $request){
        $locales_json = json_decode( file_get_contents( 'base/locales.json' ) );
        $weather_json = json_decode( file_get_contents( 'base/weather.json' ) );
        #$locale_name = $request->all();
        #$locale_name = $request->query('search');
        $locale_name = $request->input('search');
        $locale_prepare = strtolower($locale_name);
        $locale_default = new \stdClass();
        $locale_default->name = $locale_name;
        $locale_default->state = '??';

        foreach ($weather_json as $weather) {
            $weather_locale_name = strtolower($weather->locale->name);
            if ( strpos($weather_locale_name, $locale_prepare) !== false) {//strpos encontrar substr
                return view('search',
                [
                    'weathers'  =>  $weather->weather,
                    'locale'    =>  $weather->locale
                ]);
            }
        }
        #dd($locales_json);
        #dd($weather_json);

        return view('search',
        [
            'weathers'  =>  [],
            'locale'    =>  $locale_default
        ]);
    }
}
