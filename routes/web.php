<?php

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
    return view('welcome');
}); 

Route::get('/youtube',array('uses' => 'YoutubeController@index', 'as' => 'youtube'));

Route::get('/test1', 'contollerSamaca@indexPrueba');

Route::get('/test2', 'contollerSamaca@indexPrueba2');

Route::get('/muestra', 'contollerSamaca@index');

Route::get('/graficas',  'contollerSamaca@index2');

Route::get('/mapa', 'Controller@index');

Route::get('/acercaDe', function () {
    return view('acercaDe');
});
