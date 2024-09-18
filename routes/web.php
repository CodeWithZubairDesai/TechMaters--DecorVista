<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);


Route::get('register', [App\Http\Controllers\AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);

Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verifyOtp');

Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('verify.otp.form');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');



// Admin Routes
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
    // Add more admin routes here
});

// User Routes
Route::middleware(['user.auth'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/user/orders', [UserController::class, 'orders'])->name('user.orders');
    // Add more user routes here
});

// Interior Designer Routes
Route::middleware(['designer.auth'])->group(function () {
    Route::get('/designer/projects', [InteriorDesignerController::class, 'projects'])->name('designer.projects');
    Route::get('/designer/clients', [InteriorDesignerController::class, 'clients'])->name('designer.clients');
    // Add more designer routes here
});
=======

Route::controller(UserController::class)->group(function(){

    Route::get('/' , 'index');
    Route::get('/about' , 'about')->name('about');
    Route::get('/account' , 'account')->name('account');
    Route::get('/blog-detail' , 'blogDetail')->name('blog-detail');
    Route::get('/blog-grid' , 'blogGrid')->name('blog-grid');
    Route::get('/cart' , 'cart')->name('cart');
    Route::get('/checkout' , 'checkout')->name('checkout');
    Route::get('/contact' , 'contact')->name('contact');
    Route::get('/faq' , 'faq')->name('faq');
    Route::get('/history' , 'history')->name('history');
    Route::get('/location' , 'location')->name('location');
    Route::get('/login' , 'login')->name('login');
    Route::get('/order' , 'order')->name('order');
    Route::get('/portfolio' , 'portfolio')->name('portfolio');
    Route::get('/portfolio-Detail' , 'portfolioDetails')->name('portfolio-Detail');
    Route::get('/product-detail' , 'productDetail')->name('product-detail');
    Route::get('/register' , 'register')->name('register');
    Route::get('/service-details' , 'serviceDetails')->name('service-details');
    Route::get('/service' , 'service')->name('service');
    Route::get('/shop' , 'shop')->name('shop');
    Route::get('/shop-list' , 'shopList')->name('shop-list');
    Route::get('/team' , 'team')->name('team');
    Route::get('/team-details' , 'teamDetails')->name('team-details');
    Route::get('/wishlist' , 'wishlist')->name('wishlist');
    
});
>>>>>>> Stashed changes
