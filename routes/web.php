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
Route::get('/blog', 'MainController@blog')->name('blog');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/articles', 'ArticlesController@index')->name('articles.index')->middleware('auth');
Route::post('/dashboard/articles', 'ArticlesController@store')->name('articles.store')->middleware('auth');
Route::get('/dashboard/articles/create', 'ArticlesController@create')->name('articles.create')->middleware('auth');
Route::delete('/dashboard/articles/{article}', 'ArticlesController@destroy')->name('articles.destroy')->middleware('auth');
Route::get('/dashboard/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit')->middleware('auth');
Route::get('/dashboard/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::put('/dashboard/articles/{article}', 'ArticlesController@update')->name('articles.update')->middleware('auth');

Auth::routes();


