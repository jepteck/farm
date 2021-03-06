<?php

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

Route::get('/', 'PagesController@index');
Route::get('/hire', 'PagesController@hire');
Route::get('/rent', 'PagesController@rent');
Route::get('/reg', 'PagesController@reg');
Route::post('reg_data', 'PagesController@reg_data');
Route::get('/register', 'PagesController@register');
Route::get('/login', 'PagesController@login');
Route::resource('posts', 'PostController');  
Route::get('/hires', 'PagesController@hires');
Route::get('/owners', 'PagesController@owners');
Route::get('/post', 'PostController@post')->name('post');
Route::Post('/postimage', 'PostController@postimage')->name('postimage');


Route::group(['middleware' =>['auth','owners']], function (){
    Route::get('/dashboard', 'PostController@dashboard')->name('dashboard');
});
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
