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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Test UI Routes
Route::get('/login', function () {
    return view('login/login');
});

Route::get('/register', function () {
    return view('login/register');
});

Route::get('/seller/register', function () {
    return view('login/seller-register');
});

Route::get('/seller/activate', action: function () {
    return view('login/seller-activate');
});

Route::get('/', function () {
    return view('buyer/home');
});

Route::get('/marketplace', function () {
    return view('buyer/products');
});

Route::get('/Dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/Meal', function () {
    return view('meal/index');
});

Route::get('/Meal/Create', function () {
    return view('meal/create');
});