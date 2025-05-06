<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
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

// Authentication

Route::get('/', function () {
    if (Auth::check())
        return redirect('/');
    return redirect('/login');
});

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/forgot-password', [LoginController::class, 'forgotPassword']);

Route::post('/check-email', [LoginController::class, 'checkEmail'])->name('check.email');

Route::post('/set-password', [LoginController::class, 'newPassword'])->name('new.password');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/seller/register', [RegisterController::class, 'indexSeller'])->name('seller.register');

Route::post('/seller/register', [RegisterController::class, 'register']);

Route::get('/seller/activate', action: [RegisterController::class, 'activateSeller'])->name('seller.activate');

Route::post('/seller/activate', action: [RegisterController::class, 'activateSellerPost']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Optimatch

Route::get('/optimatch', [HomeController::class, 'optimatch'])->middleware('auth');

// Marketplace

Route::get('/marketplace', [ProductController::class, 'index'])->middleware('auth');

Route::get('/marketplace/detail/{id}', [ProductController::class, 'detail'])->name('products.detail');

// Admin

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Meal Admin

Route::get('/meal', [MealController::class, 'index'])->middleware('auth');

Route::get('/meal/create', [MealController::class, 'create'])->middleware('auth');

Route::post('/meal/store', [MealController::class, 'store'])->middleware('auth');

Route::get('/meal/edit/{id}', [MealController::class, 'edit'])->name('meal.edit');

Route::post('/meal/update/{id}', [MealController::class, 'update'])->name('meal.update');

Route::post('/meal/{id}', [MealController::class, 'destroy'])->name('meal.destroy');

Route::get('/seller-list', [ProfileController::class, 'sellerList'])->middleware('auth');

Route::get('/seller-list/{id}', [ProfileController::class, 'getSellerList'])->name('actseller.show');

Route::post('/seller-list/approve/{id}', [ProfileController::class, 'approveSeller'])->name('actseller.approve');

Route::post('/seller-list/reject/{id}', [ProfileController::class, 'rejectSeller'])->name('actseller.reject');

Route::post('/seller-list/nonactive', [ProfileController::class, 'nonactiveSeller'])->name('actseller.nonactive');

// Recipe Buyer

Route::get('/recipe', [MealController::class, 'indexBuyer'])->middleware('auth');

Route::get('/recipe/{id}', [MealController::class, 'show'])->name('recipe.show');

// Seller Marketplace

Route::get('/seller', [HomeController::class, 'indexSeller'])->middleware('auth');

Route::get('/seller/marketplace', [ProductController::class, 'indexSeller'])->middleware('auth');

Route::get('/seller/marketplace/create', [ProductController::class, 'create'])->middleware('auth');

Route::post('/seller/marketplace/store', [ProductController::class, 'store'])->middleware('auth');

Route::get('/seller/marketplace/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

Route::get('/seller/marketplace/detail/{id}', [ProductController::class, 'show'])->name('products.show');

Route::post('/seller/marketplace/update/{id}', [ProductController::class, 'update'])->name('products.update');

Route::post('/seller/marketplace/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Review

Route::post('/marketplace/detail/addreview', [ReviewController::class, 'store'])->middleware('auth');

Route::get('/marketplace/detail/review/{id}', [ReviewController::class, 'detail'])->name('reviews.detail');

Route::post('/marketplace/detail/review/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

Route::get('/seller/marketplace/detail/review/{id}', [ReviewController::class, 'detailSeller'])->name('reviews.detailseller');

// Chats 

Route::get('/chats', [ChatController::class, 'index'])->middleware('auth');

Route::get('/chats/startmessage/{id}', [MessageController::class, 'startMessage'])->name('message.start');

Route::post('/chats/startmessage', [MessageController::class, 'storeFirstMessage'])->middleware('auth');

Route::get('/chats/messages/{id}', [MessageController::class, 'getMessageByChat'])->name('message.show');

Route::post('/chats/messages/send', [MessageController::class, 'storeMessage'])->middleware('auth');

// Seller Chat

Route::get('/seller/chats', [ChatController::class, 'indexSeller'])->middleware('auth');

Route::get('/seller/chats/messages/{id}', [MessageController::class, 'getMessageByChatSeller'])->name('message.seller');

// Profile

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth');

Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/profile/change-password', [ProfileController::class, 'editPassword'])->middleware('auth');

Route::post('/profile/change-password', [ProfileController::class, 'updatePassword'])->name('profile.change-password');

// Seller Profile

Route::get('/seller/profile', [ProfileController::class, 'indexSeller'])->middleware('auth');

Route::get('/seller/profile/edit', [ProfileController::class, 'editSeller'])->middleware('auth');

Route::post('/seller/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/seller/profile/change-password', [ProfileController::class, 'editPasswordSeller'])->middleware('auth');

Route::post('/seller/profile/change-password', [ProfileController::class, 'updatePassword'])->name('profile.change-password');


// Route::get('/chats', function () {
//     return view('buyer/chats');
// })->middleware('auth');

// Route::get('/messages', function () {
//     return view('buyer/messages');
// })->middleware('auth');




/* ------------ Test UI Routes ---------------- */

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//     return view('login/login');
// });

// Route::get('/register', function () {
//     return view('login/register');
// });

// Route::get('/seller/register', function () {
//     return view('login/seller-register');
// });

// Route::get('/seller/activate', action: function () {
//     return view('login/seller-activate');
// });

// Route::get('/landing', function () {
//     return view('buyer/home');
// });

// Route::get('/marketplace', function () {
//     return view('buyer/products');
// });

// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });

// Route::get('/Meal', function () {
//     return view('meal/index');
// });

// Route::get('/Meal/Create', function () {
//     return view('meal/create');
// });