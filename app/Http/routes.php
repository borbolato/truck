<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
    Auth::attempt(['email' => 'luizborbolato@gmail.com', 'password' => '123456']);

    if (Auth::check()) {
        return 'logado';
    }
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/listar', function () {
       return '';
    });
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
