<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getlocale(Request $request)
    {
        $locales_json = json_decode( file_get_contents( 'base/locales.json' ) );
        $locales_params = $request->all();
        $response       = [];

        if( !count($locales_params)  ) {//return tudo
            return response()->json($locales_json, 200);
        }

        //returno o(s) param(s) que forem encontrados no json
        foreach ($locales_json as $locale) {
            if( isset($locales_params['id']) &&
                $locale->id == $locales_params['id'] ){
                return response()->json($locale);
            }
            if( isset($locales_params['name']) &&
                strpos(strtolower($locale->name), strtolower($locales_params['name'])) !== false ){//achou params
                if ( !array_key_exists($locale->id,$response ) ) {//se ja foi add ao response
                    $response+=[$locale->id => $locale];//merge
                }
            }
            if( isset($locales_params['state']) &&
                strpos(strtolower($locale->state),strtolower($locales_params['state'])) !==  false  ){
                if ( !array_key_exists($locale->id,$response) ) {
                    $response+=[$locale->id => $locale];
                }
            }
            if( isset($locales_params['latitude']) &&
                strpos(strtolower(''.$locale->latitude),strtolower(''.$locales_params['latitude'])) !== false  ){
                if ( !array_key_exists($locale->id,$response) ) {
                    $response += [$locale->id => $locale];
                }
            }
            if( isset($locales_params['longitude']) &&
                strpos(strtolower($locale->longitude),strtolower($locales_params['longitude'])) !==false ){
                if ( !array_key_exists($locale->id,$response) ) {
                    $response+=[$locale->id => $locale];
                }
            }
        }

        if ( !count($response)) {
            return response()->json('Localidade nao encontrada', 404 );
        }
         return response()->json($response);
    }

    public function getWeatherByPeriod(Request $request)
    {
        $weathers_json      = json_decode( file_get_contents( 'base/weather.json' ) );
        $weathers_params    = $request->all();
        $response           = [];

        if( !count($weathers_params)  ) {//return tudo
            return response()->json($weathers_json, 200);
        }

        foreach ($weathers_json as $key => $weather) {
            array_push($response,['period'=>$weather->period,'locale'=>$weather->locale,'weather'=>[]]);

            //o filter retorna o elemento caso return true: Se a data do params estiver no intervalo
            $response[$key]['weather'] = array_filter( $weather->weather, function($weather) use ($weathers_params ){
                //com data begin e sem data end
                if ( isset($weathers_params['begin']) && !isset($weathers_params['end']) ) {
                    return strtotime($weather->date) >= strtotime($weathers_params['begin']);// = true ou false;
                }
                //sem data begin e com data end
                if ( isset($weathers_params['end']) && !isset($weathers_params['begin']) ){
                    return strtotime($weather->date) <= strtotime($weathers_params['end']);//= true ou false;
                }
                //com begin e end
                return strtotime($weather->date) >= strtotime($weathers_params['begin']) &&
                        strtotime($weather->date) <= strtotime($weathers_params['end']);//= true ou false;
            });

        }
        return response()->json($response);
    }

    public function getWeatherByLocale(Request $request)
    {
        $weathers_json = json_decode( file_get_contents( 'base/weather.json' ) );
        $locales_params = $request->all();
        $response       = [];

        if( !count($locales_params)  ) {//return tudo
            return response()->json($weathers_json, 200);
        }

        //returno o(s) param(s) que forem encontrados no json
        foreach ($weathers_json as $weather) {
            if( isset($locales_params['id']) &&
                $weather->locale->id == $locales_params['id'] ){
                return response()->json($weather);
            }
            if( isset($locales_params['name']) &&
                strpos(strtolower($weather->locale->name), strtolower($locales_params['name'])) !== false ){//achou params
                if ( !array_key_exists($weather->locale->id,$response ) ) {//se ja foi add ao response
                    $response+=[$weather->locale->id => $weather];//merge
                }
            }
            if( isset($locales_params['state']) &&
                strpos(strtolower($weather->locale->state),strtolower($locales_params['state'])) !==  false  ){
                if ( !array_key_exists($weather->locale->id,$response) ) {
                    $response+=[$weather->locale->id => $weather];
                }
            }
            if( isset($locales_params['latitude']) &&
                strpos(strtolower(''.$weather->locale->latitude),strtolower(''.$locales_params['latitude'])) !== false  ){
                if ( !array_key_exists($weather->locale->id,$response) ) {
                    $response += [$weather->locale->id => $weather];
                }
            }
            if( isset($locales_params['longitude']) &&
                strpos(strtolower($weather->locale->longitude),strtolower($locales_params['longitude'])) !==false ){
                if ( !array_key_exists($weather->locale->id,$response) ) {
                    $response+=[$weather->locale->id => $weather];
                }
            }
        }

        if ( !count($response)) {
            return response()->json('Localidade nao encontrada', 404 );
        }
         return response()->json($response);
    }

    public function getWeather(Request $request)
    {
        $weathers_json      = json_decode( file_get_contents( 'base/weather.json' ) );
        $weathers_params    = $request->all();
        $response           = [];

        if( !count($weathers_params)  ) {//return tudo
            return response()->json($weathers_json, 200);
        }

        foreach ($weathers_json as $key => $weather) {
            array_push($response,['period'=>$weather->period,'locale'=>$weather->locale,'weather'=>[]]);

            //o filter retorna o elemento caso return true: Se a data do params estiver no intervalo
            $response[$key]['weather'] = array_filter( $weather->weather, function($weather) use ($weathers_params ){
                //com data begin e sem data end
                $text_condition = true;
                $date_condition = true;
                $temp_min_condition = true;
                $temp_max_condition = true;
                $rain_prob_condition = true;
                $rain_prec_condition = true;

                if( isset($weathers_params['text']) ){
                    $text_condition = strpos(strtolower($weather->text),strtolower($weathers_params['text'])) !== false;
                }

                if( isset($weathers_params['date']) ){
                    $date_condition =   strtotime($weather->date) == strtotime($weathers_params['date']);// = true ou false;
                }
                if( isset($weathers_params['temp_min']) ){
                    $temp_min_condition = $weather->temperature->min >= $weathers_params['temp_min'] ;
                }
                if( isset($weathers_params['temp_max']) ){
                    $temp_max_condition = $weather->temperature->max <= $weathers_params['temp_max'] ;
                }
                if( isset($weathers_params['rain_prob']) ){
                    $temp_max_condition = $weather->rain->probability == $weathers_params['rain_prob'] ;
                }
                if( isset($weathers_params['rain_prec']) ){
                    $temp_max_condition = $weather->rain->precipitation == $weathers_params['rain_prec'] ;
                }
                return  $text_condition         && $date_condition      &&
                        $temp_min_condition     && $temp_max_condition  &&
                        $rain_prob_condition    && $rain_prec_condition;
            });

        }
        return response()->json($response);
    }
}
