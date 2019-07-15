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
Route::get('/auth/check', function () { })->middleware('auth', 'role');

Route::resource('admin/event', 'EventController');
Route::resource('admin/kategori', 'KategoriEventController');
Route::resource('admin/user', 'UserController');

Route::get('admin/', function () {
    return view('admin/pages/admin');
})->name("admin")->middleware(["auth","admin"]);

Route::get('/', function () {
    return view('user/home');
})->name("member");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
