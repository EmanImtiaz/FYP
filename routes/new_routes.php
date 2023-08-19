<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PortfolioController;



Route::get('contact', [ContactController::class,'contact'])->name('contact');

Route::get('about',[AboutController::class,'about'])->name('about');

Route::get('portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');

Route::get('cart',[CartController::class,'cart'])->name('cart');
