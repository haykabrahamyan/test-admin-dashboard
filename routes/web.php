<?php
/*** ============================================ U S E   D E R I C T I V E ======================================= ***/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

use \Illuminate\Support\Facades\Route;

/*** ================================================= R O U T I N G ============================================== ***/

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => '', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::match(['get', 'post'],'/','HomeController@index')->name('home')->middleware('auth');
Route::match(['get', 'post'],'search', ['as' => '', 'uses' => 'HomeController@searchUser']);

Route::group(['prefix' => 'admin'], function () {

    Route::middleware(['auth','admin'])->group(function () {

        Route::get('/dashboard','Admin\DashboardController@index')->name('dashboard');
        Route::get('/roles','Admin\DashboardController@roleAction')->name('role');
		Route::get('create/user', ['as' => 'show-user', 'uses' => 'Admin\UserController@show']);
		Route::post('create/user', ['as' => 'create-user', 'uses' => 'Admin\UserController@store']);
		Route::delete('delete/user/{id}', ['as' => 'delete-user', 'uses' => 'Admin\UserController@destroy']);

    });

});