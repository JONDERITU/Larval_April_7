<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('about',function(){
    return view ('pages.about'); //resources/views/pages/about.blade.php also (pages/about)
    });

Route::post('clients/register', "ClientsController@store");
Route::get('pages/clientlist', "ClientsController@index");
Route::get('clientDelete/{id}', "ClientsController@destroy");
Route::get('clientUpdate/{id}', "ClientsController@edit");
Route::post('clientUpdate/{id}', "ClientsController@update");