<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{category}', 'CategoryController@show');

Route::resource('article', 'ArticleController')->except('index');
Route::get('blog/{id}', 'ArticleController@index');

Route::get('admin', 'AdminController@index');
Route::delete('admin/{article}', 'AdminController@destroy');

Route::resource('user', 'UserController');