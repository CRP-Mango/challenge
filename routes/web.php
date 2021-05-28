<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#         Rota, Controller               ,action
Route::get('/', [WeatherController::class,'index']);//Route::any recebe tanto get como post
Route::get('/search', [WeatherController::class,'search']);//Route::any recebe tanto get como post
Route::post('/search', [WeatherController::class,'search']);//Route::any recebe tanto get como post
#Route::get('/', 'App\Http\Controllers\WeatherController@search');


