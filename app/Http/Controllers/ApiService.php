<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiService extends Controller
{
    public function getLocale(array $params = []) {
        $locales_json = json_decode( file_get_contents( 'base/locales.json' ) );
        $response = [];

        if (!count($params)) {
            return $locales_json;
        }

        if (isset($params['id'])) {
            $response = array_filter(
                $locales_json,
                function($locale) use ($params) {
                    return $locale->id === intval($params['id']);
                }
            );
        }

        if (isset($params['name'])) {
            $response =  array_filter(
                $locales_json,
                function($locale) use ($params) {
                    return strpos(strtolower($locale->name), strtolower($params['name'])) !== false;
                }
            );
        }
        
        if (isset($params['state'])) {
            $response =  array_filter(
                $locales_json,
                function($locale) use ($params) {
                    return strpos(strtolower($locale->state), strtolower($params['state'])) !== false;
                }
            );
        }

        if (isset($params['latitude'])) {
            $response =  array_filter(
                $locales_json,
                function($locale) use ($params) {
                    return strpos(strval($locale->latitude), strval($params['latitude'])) !== false;
                }
            );
        }

        if (isset($params['longitude'])) {
            $response =  array_filter(
                $locales_json,
                function($locale) use ($params) {
                    return strpos(strval($locale->longitude), strval($params['longitude'])) !== false;
                }
            );
        }

        return $response;
    }

    public function getWeathers(array $params = []){
        $weathers_json = json_decode( file_get_contents( 'base/weather.json' ) );

        if (!count($params)) {
            return $weathers_json;
        }

        return array_map(
            function($weather_json) use ($params) {
                if (isset($params['date'])) {
                    $weather_json->weather = array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return strtotime($weather->date) === strtotime($params['date']);
                        }
                    );
                    return $weather_json;
                }
        
                if (isset($params['text'])) {
                    $weather_json->weather = array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return strpos(strtolower($weather->text), strtolower($params['text'])) !== false;
                        }
                    );
                    return $weather_json;
                }

                if (isset($params['temperature_min'])) {
                    $weather_json->weather = array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return $weather->temperature->min >= intval($params['temperature_min']);
                        }
                    );
                    return $weather_json;
                }

                if (isset($params['temperature_max'])) {
                    $weather_json->weather = array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return $weather->temperature->max <= intval($params['temperature_max']);
                        }
                    );
                    return $weather_json;
                }


                if (isset($params['probability'])) {
                    $weather_json->weather = array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return intval($weather->rain->probability) === intval($params['probability']);
                        }
                    );
                    return $weather_json;
                }

                if (isset($params['precipitation'])) {
                    $weather_json->weather = array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return intval($weather->rain->precipitation) === intval($params['precipitation']);
                        }
                    );
                    return $weather_json;
                }
            },
            $weathers_json
        );
    }
    
    public function getWeathersByPeriod($params) {
        $weathers_json = json_decode( file_get_contents( 'base/weather.json' ) );

        if (!$params['begin'] && !$params['end']) {
            return $weathers_json;
        }

        return array_map(
            function($weather_json) use ($params) {
                if ($params['begin'] && !$params['end']) {
                    $weather_json->weather = array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return strtotime($weather->date) >= strtotime($params['begin']);
                        }
                    );
                    return $weather_json;
                }
        
                if (!$params['begin'] && $params['end']) {
                    $weather_json->weather =  array_filter(
                        $weather_json->weather,
                        function($weather) use ($params) {
                            return strtotime($weather->date) <= strtotime($params['end']);
                        }
                    );
                    return $weather_json;
                }
        
                $weather_json->weather =  array_filter(
                    $weather_json->weather,
                    function($weather) use ($params) {
                        return strtotime($weather->date) >= strtotime($params['begin'])
                            && strtotime($weather->date) <= strtotime($params['end']);
                    }
                );
                return $weather_json;
            },
            $weathers_json
        );
    }

    public function getWeathersByLocale(array $params = []) {
        $weathers_json = json_decode( file_get_contents( 'base/weather.json' ) );

        if (!count($params)) {
            return $weathers_json;
        }

        if (isset($params['id'])) {
            $response = array_filter(
                $weathers_json,
                function($weather_json) use ($params) {
                    return $weather_json->locale->id === intval($params['id']);
                }
            );
        }

        if (isset($params['name'])) {
            $response =  array_filter(
                $weathers_json,
                function($weather_json) use ($params) {
                    return strpos(strtolower($weather_json->locale->name), strtolower($params['name'])) !== false;
                }
            );
        }
        
        if (isset($params['state'])) {
            $response =  array_filter(
                $weathers_json,
                function($weather_json) use ($params) {
                    return strpos(strtolower($weather_json->locale->state), strtolower($params['state'])) !== false;
                }
            );
        }

        if (isset($params['latitude'])) {
            $response =  array_filter(
                $weathers_json,
                function($weather_json) use ($params) {
                    return strpos(strval($weather_json->locale->latitude), strval($params['latitude'])) !== false;
                }
            );
        }

        if (isset($params['longitude'])) {
            $response =  array_filter(
                $weathers_json,
                function($weather_json) use ($params) {
                    return strpos(strval($weather_json->locale->longitude), strval($params['longitude'])) !== false;
                }
            );
        }

        return $response;
    }
}
