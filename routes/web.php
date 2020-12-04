<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => 'localization'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout', 'HomeController@logout')->name('logout');

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('change-language');

    //Task Route
    Route::resource('tasks', 'TaskController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Task route
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
