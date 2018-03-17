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
use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return \Illuminate\Support\Facades\Redirect::to('/home');
});


Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/test',function (){

    return DB::select('exec sp_CheckLogin ?, ?',['admin','admin']);
});

Route::get('/user/login',['as' => 'user.login', 'uses' => 'UsersController@login']);
Route::post('/user/login',['as' => 'user.login', 'uses' => 'UsersController@postLogin']);