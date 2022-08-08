<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\MainCategory\MainCategory;
use App\Http\Livewire\MainGroup\MainGroup;
use App\Http\Livewire\MainGroup\MainGroupController;
use App\Http\Livewire\MenuListings\MenuListings;
use App\Http\Livewire\MenuListings\MenuListingsCreate;
use App\Http\Livewire\User\UserController;
use App\Http\Livewire\User\UserCreate;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/users', UserController::class)->name('users');
    Route::get('/user-create', UserCreate::class)->name('user_create');
    Route::get('/main-group', MainGroup::class)->name('main_group');
    Route::get('/main-category', MainCategory::class)->name('main_category');
    Route::get('/menu-listings', MenuListings::class)->name('menu_listings');
    Route::get('/menu-listings-create', MenuListingsCreate::class)->name('menu_listings_create');
});


require __DIR__ . '/auth.php';
