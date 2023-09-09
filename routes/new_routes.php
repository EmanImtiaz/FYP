<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\AllPortfolioController;
use App\Http\Controllers\ContestDetailController;
use App\Http\Controllers\ContestFormController;
use App\Http\Controllers\ExplorePhotoContestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoContestController;
use App\Http\Controllers\PhotographerProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioDetailsController;
use App\Http\Controllers\SingleWinnerDetailsController;
use App\Http\Controllers\UserProfileUpdateController;
use App\Http\Controllers\WinnersController;

Route::get('contact', [ContactController::class,'contact'])->name('contact');

Route::get('about',[AboutController::class,'about'])->name('about');

Route::get('singlewinnerdetail',[SingleWinnerDetailsController::class,'singlewinnerdetail'])->name('singlewinnerdetail');

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('allportfolio',[AllPortfolioController::class,'allportfolio'])->name('allportfolio');

Route::get('photographerprofile',[PhotographerProfileController::class,'photographerprofile'])->name('photographerprofile');

Route::get('userprofileupdate',[UserProfileUpdateController::class,'userprofileupdate'])->name('userprofileupdate');



Route::get('contest',[ExplorePhotoContestController::class,'explorephotocontest'])->name('explorephotocontest');

Route::get('contestdetail',[ContestDetailController::class,'contestdetail'])->name('contestdetail');

