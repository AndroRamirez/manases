<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
      // return View::make('hello');
       return View::make('index');
});

// formulario de login
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');

Route::group(array('before' => 'auth'), function()
{
    // 
    Route::get('/hello', function()
    {
        return View::make('hello');
    });
    // 
    Route::get('logout', 'AuthController@logOut');
});

//adminsitracion
Route::get('admin', 'AdminController@admin');

//modulos de usuarios
Route::resource('admin/users', 'admin_UsersController');

//modulos de iglesia
Route::resource('iglesia/main', 'iglesia_OfrendasController');

//Ajax par abuscar por cedula
Route::post('iglesia/ajax', 'iglesia_OfrendasController@ajax');

Route::get('/', 'HomeController@showWelcome');