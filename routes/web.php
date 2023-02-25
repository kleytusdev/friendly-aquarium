<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Livewire\Brands;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Products;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [AuthenticatedController::class, 'logout']);
    Route::get('categories', Categories::class);
    Route::get('brands', Brands::class);
    Route::get('products', Products::class);
});

Route::post('/login', [AuthenticatedController::class, 'store']);
