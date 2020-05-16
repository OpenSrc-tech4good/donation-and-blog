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

Route::get('/', function () {
    return redirect('welcome');
});

##SITE
Route::get('welcome', 'SiteController@welcome');

##BLOG
Route::get('blog', 'BlogController@index');
Route::post('blog', 'BlogController@create');
Route::get('blog/{id}', 'BlogController@read');
Route::put('blog/{id}', 'BlogController@update');
Route::delete('blog/{id}', 'BlogController@delete');