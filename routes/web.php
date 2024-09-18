<?php

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
