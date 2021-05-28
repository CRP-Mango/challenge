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

        if( !count($locales_params)  ) {//returne tudo
            return response()->json($locales_json, 200);
        }

        foreach ($locales_json as $locale) {
            if( isset($locales_params['id']) && $locale->id == $locales_params['id'] ){
                return response()->json($locale);
            }
            if( isset($locales_params['name']) &&
                strpos(strtolower($locale->name), strtolower($locales_params['name'])) !== false ){//achou params
                if ( !array_key_exists($locale->id,$response ) ) {//se ja foi add ao response
                    $response = $response+[$locale->id => $locale];//merge
                }
            }
            if( isset($locales_params['state']) &&
                strpos(strtolower($locale->state),strtolower($locales_params['state'])) !==  false  ){
                if ( !array_key_exists($locale->id,$response) ) {
                    $response = $response+[$locale->id => $locale];
                }
            }
            if( isset($locales_params['latitude']) &&
                strpos(strtolower(''.$locale->latitude),strtolower(''.$locales_params['latitude'])) !== false  ){
                if ( !array_key_exists($locale->id,$response) ) {
                    $response = $response+[$locale->id => $locale];
                }
            }
            if( isset($locales_params['longitude']) &&
                strpos(strtolower($locale->longitude),strtolower($locales_params['longitude'])) !==false ){
                if ( !array_key_exists($locale->id,$response) ) {
                    $response = $response+[$locale->id => $locale];
                }
            }
        }

        if ( !count($response)) {
            return response()->json('Localidade nao encontrada', 404 );
        }
         return response()->json($response);
    }


}
