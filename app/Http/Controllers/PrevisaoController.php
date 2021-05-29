<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PrevisaoController extends Controller
{
    public function index(Request $request) {
        $previsoes = json_decode( file_get_contents( 'base/weather.json' ) );

        if ( $request->s ) {
            $previsoes = array_filter(
                $previsoes,
                function ($previsao) use ($request) {
                    return strpos(strtolower($previsao->locale->name), strtolower($request->s)) !== false;
                }
            );
        }

        return view('welcome', compact('previsoes'));
    }

}
