<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Homepage;
use App\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class);
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/product/{id}', ProductDetail::class)->name('product.detail');
