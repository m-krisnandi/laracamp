<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;

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
})->name('welcome');



// Socialite route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

// Midtrans route
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);


Route::middleware(['auth'])->group(function() {
    // checkout route
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');

    // dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    // Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');

    // user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole')->group(function() {
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    });

    // admin dashboard
    Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['can:role, "super-admin", "admin"'])->group(function() {
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard')->middleware('can:role, "super-admin", "admin"');
        Route::get('/transactions', [AdminDashboard::class, 'transactions'])->name('transactions')->middleware('can:role, "super-admin", "admin"');
        Route::get('/users', [AdminDashboard::class, 'users'])->name('users')->middleware('can:role, "super-admin"');

        // admin checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update')->middleware('can:role, "super-admin", "admin"');
    });

});

require __DIR__.'/auth.php';
