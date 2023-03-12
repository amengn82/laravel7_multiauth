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
    return view('welcome');
});
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
Route::get('/menu', 'MenuController@index');
Route::post('/menu', 'MenuController@ajaxStore'); //ต้องการให้คนที่ยังไม่ได้ Authen ได้เห็นเมนู

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart/show/{id}', 'CartController@show');
Route::get('/cart/pdf','CartController@pdf');
Route::get('/cart/cancel','CartController@destroy');
Route::get('/video', 'VideoController@index');
Route::get('/contactus', 'ContactusController@index');

Route::get('/admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

//Dashboard

Route::get('/admin/dashboard', 'AdminDashboardController@dashboard')->middleware('is_admin');;

// User

Route::get('/admin/users/create', 'AdminUserController@create')->name('admin.user.create')->middleware('is_admin');
Route::post('/admin/users', 'AdminUserController@store')->name('admin.user.store')->middleware('is_admin');
Route::get('/admin/users', 'AdminUserController@index')->name('admin.user.index')->middleware('is_admin');

Route::get('/admin/users/{id}/edit', 'AdminUserController@edit')->name('admin.user.edit')->middleware('is_admin');
Route::post('/admin/users/{id}/edit', 'AdminUserController@update')->name('admin.user.update')->middleware('is_admin');

Route::get('/admin/users/{id}', 'AdminUserController@destroy')->name('admin.user.destroy')->middleware('is_admin');

// Menu
Route::get('/admin/menus/create', 'AdminMenuController@create')->name('admin.menu.create')->middleware('is_admin');
Route::post('/admin/menus', 'AdminMenuController@store')->name('admin.menu.store')->middleware('is_admin');
Route::get('/admin/menus', 'AdminMenuController@index')->name('admin.menu.index')->middleware('is_admin');

Route::get('/admin/menus/{id}/edit', 'AdminMenuController@edit')->name('admin.menu.edit')->middleware('is_admin');
Route::post('/admin/menus/{id}/edit', 'AdminMenuController@update')->name('admin.menu.update')->middleware('is_admin');

Route::get('/admin/menus/{id}', 'AdminMenuController@destroy')->name('admin.menu.destroy')->middleware('is_admin');

// Cart

Route::get('/admin/carts/create', 'AdminCartController@create')->name('admin.cart.create')->middleware('is_admin');
Route::post('/admin/carts', 'AdminCartController@store')->name('admin.cart.store')->middleware('is_admin');
Route::get('/admin/carts', 'AdminCartController@index')->name('admin.cart.index')->middleware('is_admin');

Route::get('/admin/carts/{id}/edit', 'AdminCartController@edit')->name('admin.cart.edit')->middleware('is_admin');
Route::post('/admin/carts/{id}/edit', 'AdminCartController@update')->name('admin.cart.update')->middleware('is_admin');

Route::get('/admin/carts/{id}', 'AdminCartController@destroy')->name('admin.cart.destroy')->middleware('is_admin');







