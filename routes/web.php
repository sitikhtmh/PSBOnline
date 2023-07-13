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
    return view('login.loginn');
});

Route::get('/register', function () {
    return view('login.register');
});

// Route::get('/layout', function () {
//     return view('layout.index');
// });

Route::get('/admin/update', function () {
    return view('admin.update');
});

Route::get('/admin/detailpendaftar', function () {
    return view('admin.detailpendaftar');
});

Route::get('/user/dashboard','DashboardController@index');
Route::get('/user/detail','DashboardController@show');
Route::post('/user/dashboard', 'DashboardsController@store');
Route::get('/user/pendaftaran', 'DashboardController@create'); 

//print
Route::get('/user/print', 'DashboardController@print_all');

// admin
Route::get('/admin/daftarakun','AdminController@index');

// Route::get('/admin/update','AdminController@index');

Route::get('/admin/informasi','AdminController@indexinformasi');