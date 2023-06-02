<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Livewire\Brands;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Livewire\Admin;
use App\Http\Livewire\CustomPagination;
use App\Http\Livewire\Home;

Route::middleware([
    config('jetstream.auth_session'),
    // 'verified'
])->group(function () {
    Route::get('/', function () {
      return view('home');
    })->name('home');

    Route::get('/about', function () {
      return view('about');
    })->name('about');

    Route::get('/contact', function () {
      return view('contact');
    })->name('contact');

    Route::get('/shop', function () {
      return view('shop');
    })->name('shop');

    Route::get('/fish', function () {
      return view('store.fish');
    })->name('fish');

    Route::get('/food', function () {
      return view('store.food');
    })->name('food');

    Route::get('/accesories', function () {
      return view('store.accesories');
    })->name('accesories');

    Route::get('/lightning', function () {
      return view('store.lightning');
    })->name('lightning');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('logout', [AuthenticatedController::class, 'logout']);
    Route::get('categories', Categories::class);
    Route::get('products', Products::class);
    Route::get('dashboard', Admin::class)->name('dashboard');
});

Route::post('/login', [AuthenticatedController::class, 'store']);
