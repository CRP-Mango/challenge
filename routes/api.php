<?php

use App\Model\Empresa;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Rest API
Route::group(['prefix' => 'locale'], function() {
    Route::get('/', function(){
        $locales = app(App\Http\Controllers\Apiservice::class)->getLocale();
        return response()->json($locales);
    });
    Route::get('/id/{id}', function($id){
        $locales = app(App\Http\Controllers\Apiservice::class)->getLocale(compact('id'));
        return response()->json($locales);
    });
    Route::get('/name/{name}', function($name){
        $locales = app(App\Http\Controllers\Apiservice::class)->getLocale(compact('name'));
        return response()->json($locales);
    });
    Route::get('/state/{state}', function($state){
        $locales = app(App\Http\Controllers\Apiservice::class)->getLocale(compact('state'));
        return response()->json($locales);
    });
    Route::get('/latitude/{latitude}', function($latitude){
        $locales = app(App\Http\Controllers\Apiservice::class)->getLocale(compact('latitude'));
        return response()->json($locales);
    });
    Route::get('/longitude/{longitude}', function($longitude){
        $locales = app(App\Http\Controllers\Apiservice::class)->getLocale(compact('longitude'));
        return response()->json($locales);
    });
});

Route::group(['prefix' => 'weather'], function() {
    /**
     * Rotas para buscar as previsões
     */
    
    Route::get('/', function(){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers();
        return response()->json($weathers);
    });
    Route::get('/date/{date}', function($date) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('date'));
        return response()->json($weathers);
    });
    Route::get('/text/{text}', function($text) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('text'));
        return response()->json($weathers);
    });
    Route::get('/temperature/min/{temperature_min}', function($temperature_min) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('temperature_min'));
        return response()->json($weathers);
    });
    Route::get('/temperature/max/{temperature_max}', function($temperature_max) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('temperature_max'));
        return response()->json($weathers);
    });
    Route::get('/temperature/{temperature_min}/{temperature_max}', function($temperature_min, $temperature_max) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('temperature_min', 'temperature_max'));
        return response()->json($weathers);
    });
    Route::get('/rain/prob/{probability}', function($probability) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('probability'));
        return response()->json($weathers);
    });
    Route::get('/rain/prec/{precipitation}', function($precipitation) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('precipitation'));
        return response()->json($weathers);
    });
    Route::get('/rain/{probability}/{precipitation}', function($probability, $precipitation) {
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathers(compact('probability', 'precipitation'));
        return response()->json($weathers);
    });
    /**
     * Rotas para buscar as previsões pelo periodo
     */
    Route::get('/period/begin/{begin}', function($begin){
        $end = '';
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByPeriod(compact('begin', 'end'));
        return response()->json($weathers);
    });
    Route::get('/period/end/{end}', function($end){
        $begin = '';
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByPeriod(compact('begin', 'end'));
        return response()->json($weathers);
    });
    Route::get('/period/{begin}/{end}', function($begin, $end){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByPeriod(compact('begin', 'end'));
        return response()->json($weathers);
    });


    /**
     * Rotas para buscar as previsões pelas localidades
     */
    Route::get('/locale', function(){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByLocale();
        return response()->json($weathers);
    });
    Route::get('/locale/id/{id}', function($id){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByLocale(compact('id'));
        return response()->json($weathers);
    });
    Route::get('/locale/name/{name}', function($name){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByLocale(compact('name'));
        return response()->json($weathers);
    });
    Route::get('/locale/state/{state}', function($state){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByLocale(compact('state'));
        return response()->json($weathers);
    });
    Route::get('/locale/latitude/{latitude}', function($latitude){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByLocale(compact('latitude'));
        return response()->json($weathers);
    });
    Route::get('/locale/longitude/{longitude}', function($longitude){
        $weathers = app(App\Http\Controllers\Apiservice::class)->getWeathersByLocale(compact('longitude'));
        return response()->json($weathers);
    });
});
