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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
            Route::resource('dashboard', DashboardController::class);
            Route::resource('user', AdminController::class);

        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::group(['prefix' => 'user', 'middleware' => 'user'], function(){
                Route::resource('home', HomeController::class);    
            });
        });

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
