<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MealController;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/login', function () {
//     return view('login/login');
// });

Route::get('/login', action: [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('logins');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
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

//Dashboard
Route::get('/dashboard', action: [DashboardController::class, 'index'])->name('dashboard.index');

//Meal
Route::get('/meal', action: [MealController::class, 'index'])->name('meal.index');
Route::get('/meal/create', action: [MealController::class, 'create'])->name('meal.create');
Route::post('/meal/create/store', action: [MealController::class, 'store'])->name('meal.store');
Route::get('/meal/{id}/edit', [MealController::class, 'edit'])->name('meal.edit');
Route::put('/meal/{id}', [MealController::class, 'update'])->name('meal.update');
Route::delete('/meal/{id}', [MealController::class, 'destroy'])->name('meal.destroy');
