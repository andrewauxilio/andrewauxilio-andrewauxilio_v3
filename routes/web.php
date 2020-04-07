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

Route::get('/', 'MainController@home')->name('about');
Route::get('/projects', 'MainController@projects')->name('projects');
Route::get('/resume', 'MainController@resume')->name('resume');


//Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');