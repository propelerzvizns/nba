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





Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'TeamsController@index');
    Route::get('/teams/{id}', 'TeamsController@show')->name('team');
    Route::get('/players/{id}', 'PlayersController@show');
    Route::get('/logout', 'LoginController@logout');
    Route::post('/comment', 'CommentsController@store');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/registration', 'RegistrationController@index');
    Route::post('/registration', 'RegistrationController@store');
    Route::get('/register/{id}', "RegistrationController@verifyUser");
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@store');

});



