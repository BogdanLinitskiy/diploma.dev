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
//
//Route::get('/for-performers','PerformersController@checkLogin');
//Route::get('/for-clients','ClientsController@checkLogin');
//
//Route::get('/IT','ITController@show');
//Route::get('/Marketing','MarketingController@show');
//Route::get('/VideoNAnimation','VideoNAnimationController@show');
//Route::get('/Design','DesignController@show');
//Route::get('/FunNLifestyle','FunNLifestyleController@show');
//Route::get('/business','BusinessController@show');
//
//Route::get('/categories/{name}','CategoriesController@category');

Route::get('/categories/{name}/{sub}','SubCategoriesController@show');

Route::get('/categories/{category}','CategoriesController@show');
//Route::resources([
//    'categories' => 'CategoriesController'
//]);

Route::get('/login','SessionsController@create')->name('login');
Route::post('/sessions','SessionsController@store');
Route::get('/logout','SessionsController@destroy');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

/* test route for seller_profile*/
Route::get('/seller_profile','SessionsController@show');