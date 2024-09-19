<?php

use App\Http\Controllers\UserController as FUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// User Controller
use App\Http\Controllers\User\BlogController as UserBlogController;
use App\Http\Controllers\User\UserController ;
use App\Http\Controllers\User\ContactUsController as UserContactUsController;



//Admin Controller
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\GalleryCategoryController as AdminGalleryCategoryController;
use App\Http\Controllers\Admin\ProductCategoryController as AdminProductCategoryController;





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


Route::controller(AuthController::class)->group(function(){
    Route::post('/register', 'register')->name('auth.register');
    Route::post('login', 'login')->name('auth.login');
    Route::post('/verify-otp','verifyOtp')->name('auth.verifyotp');
});


// Admin Routes
Route::prefix('admin')->group(function(){
    Route::controller(AdminDashboardController::class)->group(function(){
        Route::get('/dashboard',  'index')->name('admin.dashboard');
        Route::post('register', 'register');
        Route::get('login', 'login_two')->name('loginForm');
        Route::post('/login-verification', 'login')->name('login.verification');
        Route::post('/verifiedcredintails', 'verifiedcredintails')->name('verifiedcredintails');
        Route::post('/verifyOTP/expire', 'expireotp')->name('expireotp');
        Route::post('/verifyOTP/resend', 'resendOtp')->name('resendotp')->middleware('throttle:5,1');
        Route::get('forgetPasswordForm','forgetPasswordForm')->name('forgetPasswordForm');
        Route::get('verifyOtpform','verifyOtpform')->name('verifyOtpform');
        Route::post('forget_password', 'forgetPassword')->name('forget_password');
        Route::get('/logouts', 'logout')->name('logout');
        Route::get('/resetPasswordForm/{token}','resetPasswordForm')->name('resetPasswordForm');
        Route::post('reset_password', 'resetPassword')->name('reset_password');
    });


Route::middleware(['admin.auth'])->group(function () {

    
    
    Route::controller(AdminGalleryCategoryController::class)->group(function () {
        Route::prefix('gallery-categories')->group(function () {
            Route::get('/', 'index')->name('admin.gallery.categories.index');
            Route::get('/create', 'create')->name('admin.gallery.categories.create');
            Route::post('/store', 'store')->name('admin.gallery.categories.store');
            Route::post('/status', 'status')->name('admin.gallery.categories.status');
            Route::get('/{id}/edit', 'edit')->name('admin.gallery.categories.edit');
            Route::post('/update', 'update')->name('admin.gallery.categories.update');
            
            Route::post('/destroy/{id}', 'destroy')->name('admin.gallery.categories.destroy');
        });
    });


    Route::controller(AdminProductCategoryController::class)->group(function () {
        Route::prefix('product-categories')->group(function () {
            Route::get('/', 'index')->name('admin.product.categories.index');
            Route::get('/create', 'create')->name('admin.product.categories.create');
            Route::post('/store', 'store')->name('admin.product.categories.store');
            Route::post('/status', 'status')->name('admin.product.categories.status');
            Route::get('/{id}/edit', 'edit')->name('admin.product.categories.edit');
            Route::post('/update', 'update')->name('admin.product.categories.update');
            
            Route::post('/destroy/{id}', 'destroy')->name('admin.product.categories.destroy');
        });
    });



    Route::controller(AdminGalleryController::class)->group(function () {
        Route::prefix('gallery')->group(function () {
            Route::get('/', 'index')->name('gallery.index');
            Route::get('/create', 'create')->name('gallery.create');
            Route::post('/store', 'store')->name('gallery.store');
            Route::post('/status', 'status')->name('gallery.status');
            Route::get('/{id}/edit', 'edit')->name('gallery.edit');
            Route::put('/update', 'update')->name('gallery.update');
            
            Route::post('/destroy/{id}', 'destroy')->name('gallery.destroy');
        });
    });


    Route::controller(AdminBlogController::class)->group(function () {
        Route::prefix('blogs')->group(function () {
            Route::get('/', 'index')->name('admin.blogs.index');
            Route::get('/{id}/detail', 'show')->name('admin.blogs.detail');
            Route::get('/create', 'create')->name('admin.blogs.create');
            Route::post('/store', 'store')->name('admin.blogs.store');
            Route::put('/{id}/detail', 'show')->name('admin.blogs.show');
            Route::post('/status', 'status')->name('admin.blogs.status');
            Route::get('/{id}/edit', 'edit')->name('admin.blogs.edit');
            Route::post('/update', 'update')->name('admin.blogs.update');
            Route::post('/destroy/{id}', 'destroy')->name('admin.blogs.destroy');
        });
    });


    Route::controller(AdminProductController::class)->group(function () {
        Route::prefix('products')->group(function () {
            Route::get('/', 'index')->name('admin.products.index');
            Route::get('/{id}/detail', 'show')->name('admin.products.detail');
            Route::get('/create', 'create')->name('admin.products.create');
            Route::post('/store', 'store')->name('admin.products.store');
            Route::put('/{id}/detail', 'show')->name('admin.products.show');
            Route::post('/status', 'status')->name('admin.products.status');
            Route::get('/{id}/edit', 'edit')->name('admin.products.edit');
            Route::post('/update', 'update')->name('admin.products.update');
            Route::post('/destroy/{id}', 'destroy')->name('admin.products.destroy');
        });
    });

});
});







// Interior Designer Routes
Route::prefix('designer')->group(function(){
Route::middleware(['designer.auth'])->group(function () {

});
});













// User Routes
Route::prefix('frontend')->group(function(){
    Route::middleware(['user.auth'])->group(function () {
        Route::get('/', [AuthController::class, 'showWelcome'])->name('welcome');
    });

    Route::controller(FUserController::class)->group(function(){
        Route::get('/', 'index');
        Route::get('/about', 'about')->name('about');
        Route::get('/account', 'account')->name('account');
        Route::get('/add-listing', 'addListing')->name('add-listing');
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
        Route::get('/verify_otp', 'verifyOtpform')->name('users.verifyOtp');
        Route::get('/logouts', 'logout')->name('users.logout');
    });

    Route::controller(UserBlogController::class)->prefix('blogs')->group(function () {
        Route::get('/', 'index')->name('users.blogs.index');
        Route::get('/{id}/detail', 'show')->name('users.blogs.show');

    });


    Route::controller(UserContactUsController::class)->prefix('contact')->group(function () {
        Route::get('/', 'create')->name('users.contact.index');
        Route::post('/store', 'store')->name('users.contact.store');
    });
});