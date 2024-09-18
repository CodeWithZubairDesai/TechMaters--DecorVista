<?php

use App\Http\Controllers\UserController as FUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\UserController ;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::post('/register', 'register')->name('auth.register');
    Route::post('login', 'login')->name('auth.login');
    Route::post('/verify-otp','verifyOtp')->name('auth.verifyotp');
});


// Admin Routes
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin/dashboard', [AuthController::class, 'showDashboard'])->name('admin.dashboard');
    // Add more admin routes here
});

// User Routes

// Interior Designer Routes
Route::middleware(['designer.auth'])->group(function () {
    Route::get('/designer/dashboard', [AuthController::class, 'interiorDashboard'])->name('designer.dashboard');
});

Route::prefix('frontend')->group(function(){
    Route::middleware(['user.auth'])->group(function () {
        Route::get('/', [AuthController::class, 'showWelcome'])->name('welcome');
    });

    Route::controller(FUserController::class)->group(function(){
        Route::get('/', 'index');
        Route::get('/about', 'about')->name('about');
        Route::get('/account', 'account')->name('account');
        Route::get('/blog-detail', 'blogDetail')->name('blog-detail');
        Route::get('/blog-grid', 'blogGrid')->name('blog-grid');
        Route::get('/cart', 'cart')->name('cart');
        Route::get('/checkout', 'checkout')->name('checkout');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/history', 'history')->name('history');
        Route::get('/location', 'location')->name('location');
        Route::get('/order', 'order')->name('order');
        Route::get('/portfolio', 'portfolio')->name('portfolio');
        Route::get('/portfolio-Detail', 'portfolioDetails')->name('portfolio-Detail');
        Route::get('/product-detail', 'productDetail')->name('product-detail');
        Route::get('/register', 'register')->name('register');
        Route::get('/service-details', 'serviceDetails')->name('service-details');
        Route::get('/service', 'service')->name('service');
        Route::get('/shop', 'shop')->name('shop');
        Route::get('/shop-list', 'shopList')->name('shop-list');
        Route::get('/team', 'team')->name('team');
        Route::get('/team-details', 'teamDetails')->name('team-details');
        Route::get('/wishlist', 'wishlist')->name('wishlist');
    });

    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('/register', 'registerform')->name('users.register');
        Route::get('/login', 'loginform')->name('users.login');
        Route::get('/verify_otp', 'verifyOtp')->name('users.verifyOtp');
        Route::get('/logouts', 'logout')->name('users.logout');
    });

    Route::controller(BlogController::class)->prefix('blogs')->group(function () {
        Route::get('/', 'index')->name('blogs.index');
        Route::get('/{id}/detail', 'show')->name('blogs.show');
    });
});
