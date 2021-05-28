<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getlocale(Request $request)
    {
        $locales_json = json_decode( file_get_contents( 'base/locales.json' ) );
        $locale_id = $request->input('id');

        #dd($locale_id);
        if( !$locale_id ) {
            return response()->json($locales_json, 200);
        }

        foreach ($locales_json as $locale) {
            if($locale->id == $locale_id){
                return response()->json($locale);
            }
        }
        return response()->json('Localidade nao encontrada', 404 );
    }
}
