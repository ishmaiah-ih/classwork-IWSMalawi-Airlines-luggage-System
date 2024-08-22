<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\LuggageController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [commonController::class, 'main'])->name('home');
//user dash-board

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [commonController::class, 'home'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/index', [CommonController::class, 'adminIndex'])->name('admin.index');
Route::get('/admin/customers', [CommonController::class, 'adminCustomers'])->name('admin.customers');
Route::get('/admin/luggageList', [CommonController::class, 'adminLuggageList'])->name('admin.luggageList');
Route::get('/admin/customer-add', [CommonController::class, 'adminCustomerAdd'])->name('admin.customer-add');
Route::get('/admin/customer-card', [CommonController::class, 'adminCustomerCard'])->name('admin.customer-card');
Route::get('/admin/customers/{id}', [CommonController::class, 'adminCustomerShow'])->name('admin.customer.show');

Route::get('/admin/customer-search', [CommonController::class, 'search'])->name('admin.customer-search');
// routes/web.php
Route::delete('/admin/customer/{id}', [CommonController::class, 'destroy'])->name('admin.customer-delete');


Route::post('/luggage/register', [LuggageController::class, 'store'])->name('luggage.store');
Route::get('/luggage/{customer}', [LuggageController::class, 'show'])->name('luggage.show');

Route::get('/luggage/{customer}/download-pdf', [LuggageController::class, 'downloadPdf'])->name('luggage.downloadPdf');

//Login
// Show the login form
Route::get('login', [CustomLoginController::class, 'showLoginForm'])->name('login');

// Handle the login request
Route::post('login', [CustomLoginController::class, 'login'])->name('login.submit');

// Handle the logout request
Route::post('logout', [CustomLoginController::class, 'logout'])->name('logout');

