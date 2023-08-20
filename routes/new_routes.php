<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContestFormController;
use App\Http\Controllers\PhotoContestController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioDetailsController;

Route::get('contact', [ContactController::class,'contact'])->name('contact');

Route::get('about',[AboutController::class,'about'])->name('about');

Route::get('portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');

Route::get('portfoliodetails',[PortfolioDetailsController::class,'portfoliodetails'])->name('portfoliodetails');

Route::get('formcontest',[ContestFormController::class,'formcontest'])->name('contestform');

Route::get('photocontest',[PhotoContestController::class,'photocontest'])->name('photocontest');
