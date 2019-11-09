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

Route::get('/charge', function () {
    return view('pages.charge');
});

Route::get('/cr', 'CrController@index');

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::resource('Rapports', 'RapportController');    
    
    Route::resource('Charges', 'ChargeController');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/test', 'RapportController@MAJ'); 

    Route::get('/excel', 'RapportController@toExcel');



});
