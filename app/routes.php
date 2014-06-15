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
Route::resource('admin/users', 'Admin_UsersController');