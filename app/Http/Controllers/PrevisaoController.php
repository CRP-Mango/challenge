<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrevisaoController extends Controller
{
    public function buscar (){
        $locais = json_decode(file_get_contents("base/locales.json"));
        $previsoes = json_decode(file_get_contents("base/weather.json"));
        foreach($previsoes as $previsao){
            return view('welcome',[
                'previsao' => $previsao->weather
            ]) ;
        }
    }
}
