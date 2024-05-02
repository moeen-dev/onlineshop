<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Route::get('/category', [App\Http\Controllers\Frontend\CategoryController::class, 'index'])->name('web.category.index');

Route::get('category/{slug}', [App\Http\Controllers\Frontend\CategoryController::class, 'show'])->name('web.category.show');

Route::get('product', [App\Http\Controllers\Frontend\ProductController::class, 'index'])->name('web.product.index');

Route::get('product/{slug}', [App\Http\Controllers\Frontend\ProductController::class, 'show'])->name('web.product.show');

Route::get('/service', [App\Http\Controllers\Frontend\ServiceController::class, 'index'])->name('service');

Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');

Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');


// Auth
Route::get('login', [App\Http\Controllers\Frontend\AuthController::class, 'showLoginForm'])->name('user.login');

Route::post('login', [App\Http\Controllers\Frontend\AuthController::class, 'login'])->name('user.login.submit');

Route::get('logout', [App\Http\Controllers\Frontend\AuthController::class, 'logout'])->name('user.logout');

Route::get('register', [App\Http\Controllers\Frontend\AuthController::class, 'showRegisterForm'])->name('user.register');

Route::post('register', [App\Http\Controllers\Frontend\AuthController::class, 'register'])->name('user.register.submit');

Route::get('profile', [App\Http\Controllers\Frontend\ProfileController::class, 'index'])->name('user.profile');

Route::get('address', [App\Http\Controllers\Frontend\ProfileController::class, 'address'])->name('address');

Route::post('add-address', [App\Http\Controllers\Frontend\ProfileController::class, 'addAddress'])->name('add.address');

Route::get('orders', [App\Http\Controllers\Frontend\ProfileController::class, 'order'])->name('user.order');


// order
Route::get('order/{slug}', [App\Http\Controllers\Frontend\OrderController::class, 'index'])->name('order.index');

Route::post('order', [App\Http\Controllers\Frontend\OrderController::class, 'order'])->name('order.submit');

Route::get('confirm/order', [App\Http\Controllers\Frontend\OrderController::class, 'confirm'])->name('order.confirm');


Route::prefix('admin')->group(function () {
	
Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('admin.dashboard');

Route::get('login', [App\Http\Controllers\Backend\LoginController::class, 'LoginForm'])->name('login');

Route::post('login', [App\Http\Controllers\Backend\LoginController::class, 'login'])->name('login.submit');

Route::post('logout', [App\Http\Controllers\Backend\LoginController::class, 'logout'])->name('logout');

Route::resource('category', App\Http\Controllers\Backend\CategoryController::class);

Route::resource('product', App\Http\Controllers\Backend\ProductController::class);

Route::get('notification/{id}', [App\Http\Controllers\Backend\NotificationController::class, 'show'])->name('notification.show');

Route::get('order', [App\Http\Controllers\Backend\OrderController::class, 'index'])->name('admin.order');

Route::get('order/{id}', [App\Http\Controllers\Backend\OrderController::class, 'show'])->name('admin.order.show');
 
});
