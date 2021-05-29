<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrevisaoController extends Controller
{
    public function buscar (Request $request){
        $locais = json_decode(file_get_contents("base/locales.json"));
        $previsoes = json_decode(file_get_contents("base/weather.json"));
        $previsao_nome = $request->all();
        if($previsao_nome == null){
            return view('welcome', ['previsoes' => $previsoes]);
        }
        // dd($previsoes);
        // foreach($previsoes as $previsao){
        //     return view('welcome',[
        //         'previsoes' => $previsao
        //     ]) ;
        // }
    }
}
