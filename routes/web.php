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

Route::get('/cr', 'CrController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::resource('Rapports', 'RapportController');

    Route::get('Rapport/unite', 'RapportController@users')->name('Rapports.users');

    Route::get('Rapport/{type}/{date}', 'RapportController@ShowRapport')->name('Rapports.showRap');

    Route::resource('Charges', 'ChargeController');

    Route::resource('Crs', 'CrController');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/test', 'RapportController@MAJ');

    Route::get('/imprimer/{type}/{date}', 'RapportController@toExcel')->name('Rapports.toExcel');

    Route::post('/filter', 'RapportController@filter');



});
