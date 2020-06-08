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

Route::get('/', 'MainPageController');

Route::get('/subject/{slug}', 'SubjectController@show')->name('subjects.show');

Route::get('/subject/{subject}/theme/{theme}', 'TaskController@index')->name('tasks.index');
Route::get('/subject/{subject}/theme/{theme}/tasks', 'TaskController@show')->name('tasks.show');

Route::get('admin/{token}', 'AdminController')->name('admin');
