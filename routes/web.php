<?php

use Illuminate\Support\Facades\Route;
use App\User;
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


Route::get('/users',function(){
  dd(User::with(['posts'])->get()->first()->posts->first()->id);
});


use Illuminate\Support\Facades\DB;




Route::get('/google', function(){


  return GoogleAPI::foo();
});


Route::group(['middleware'=>'verified'],function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('post','PostController');
  Route::get('/me/post','PostController@mePost')->name('post.me');
});

Auth::routes(['verify'=>true]);
