<?php

use App\Message;
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

Route::get('/', 'PostController@showPosts');
Route::get('/blog', 'PostController@postList');
Route::get('/blog/{id}', 'PostController@postPage');
Route::get('/contact-us', 'ContactUsController@index');
Route::post('/contact-us', 'ContactUsController@sendMessage');
