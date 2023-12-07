<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// about
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// contact
Route::resource('contact', ContactController::class)
    ->only('index')
    ->names('contact');