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

Auth::routes();

Route::get('/','IndexController@index');

Route::get('/login', function () {
   return redirect('/welcome');
});

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', [
  'middleware' => 'auth',
  'uses' => 'IndexController@profile'
]);

Route::get('/register','ajaxController@show');
Route::post('/register','ajaxController@loginreg');

Route::post('/authlogin','ajaxController@authlogin');
