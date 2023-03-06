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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/', function () {
//         return view('home');
//     })->name('home');
// });

Route::middleware([])->group(function () {
  Route::get('/', function () {
    return view('home');
  })->name('home');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('logout', [AuthenticatedController::class, 'logout']);
    Route::get('categories', Categories::class);
    Route::get('brands', Brands::class);
    Route::get('products', Products::class);
    Route::get('dashboard', Admin::class);
});

Route::post('/login', [AuthenticatedController::class, 'store']);

Route::get('about', function() {
  return 'About';
})->name('about');

Route::get('contact', function() {
  return 'Contact';
})->name('contact');
