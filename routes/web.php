<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $nome = "Joao Jr";
    $idade = 39;
    $arr = [1,2,3,4,5];
    $nomes = ['Eu','Tu'];
    return view('home',
    [
        'nome' => $nome,
        'idade' => $idade,
        'arr'   => $arr,
        'nomes' => $nomes
    ]);
});


Route::get('/home2', function () {
    $nome = "Joao Jr";
    $idade = 39;
    $arr = [1,2,3,4,5];
    $nomes = ['Eu','Tu'];
    return view('home2',
    [
        'nome' => $nome,
        'idade' => $idade,
        'arr'   => $arr,
        'nomes' => $nomes
    ]);
});
