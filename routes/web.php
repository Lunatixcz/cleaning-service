<?php

use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\EmployessController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check() ? redirect()->route('dashboard') : redirect()->route('login');
});

Route::middleware(['auth', 'CheckLevel:user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('order', OrderController::class);
    Route::resource('payment', PaymentController::class)->except(['create', 'store']);
    Route::get('/payment/create/{order}', [PaymentController::class, 'create'])->name('payment.create');
    Route::post('/payment/store/{order_id}', [PaymentController::class, 'store'])->name('payment.store');
});

Route::middleware(['auth'], 'CheckLevel:admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('adminUser', AdminUserController::class);
    Route::resource('employees', EmployessController::class);
    Route::resource('adminOrder', AdminOrderController::class);
});

require __DIR__ . '/auth.php';
