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

Route::resources([
    '/admin/categories' => 'Admin\CategoriesController',
    '/admin/sub_categories' => 'Admin\SubCategoriesController',
    '/seller_profile' => 'UsersController',
    '/posts' => 'PostsController'
]);
Route::post('/seller_profile/{seller_profile}','UsersController@update');
Route::post('/posts/{post}','PostsController@update');

Route::get('/admin/categories/{category}/delete','Admin\CategoriesController@delete');
Route::get('/seller_profile/{seller_profile}/delete','UsersController@delete');
Route::get('/posts/{post}/delete','PostsController@delete');


Route::get('/categories/{name}/{sub}','SubCategoriesController@show');

Route::get('/categories/{category}','CategoriesController@show');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/sessions','SessionsController@store');
Route::get('/logout','SessionsController@destroy');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

/* test route for seller_profile*/
//Route::get('/seller_profile','UsersController@show');
//Route::post('/seller_profile','UsersController@store');
//Route::get('/seller_profile/{seller_profile}/edit','UsersController@edit');

//Admin Auth Middleware
Route::get('/admin/','Admin\MainController@index');
Route::get('/admin/login',['as' => 'admin.login','uses' => 'Admin\LoginController@showLoginForm']);
Route::post('/admin/login',['uses' => 'Admin\LoginController@login']);
Route::get('/admin/logout',['as' => 'admin.logout','uses' => 'Admin\LoginController@logout']);
