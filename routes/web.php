<?php

use Illuminate\Support\Facades\Route;

//  Route::get('/', function () {return view('home');});
Route::get('/migrate', function(){
    return view('home');
});
//Route::post('/calcular', ['uses'=>'App\Http\Controllers\imcController@index']);
