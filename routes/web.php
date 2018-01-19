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

Route::get('/', 'HomeController@home');

Route::get('/for-performers','PerformersController@checkRegistration');
Route::get('/for-clients','ClientsController@checkRegistration');

Route::get('/IT','ITController@show');
Route::get('/Marketing','MarketingController@show');
Route::get('/VideoNAnimation','VideoNAnimationController@show');
Route::get('/Design','DesignController@show');
Route::get('/FunNLifestyle','FunNLifestyleController@show');
Route::get('/business','BusinessController@show');