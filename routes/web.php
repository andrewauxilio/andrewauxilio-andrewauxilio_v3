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
Route::get('/blog', 'ArticlesController@index')->name('blog');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/dashboard/articles', 'ArticlesController@store')->name('articles.store');
Route::get('/dashboard/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/dashboard/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::get('/dashboard/articles/{article}', 'ArticlesController@show')->name('articles.show');

Auth::routes();


