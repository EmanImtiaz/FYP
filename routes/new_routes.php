<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllPortfolioController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContestDetailController;
use App\Http\Controllers\ContestFormController;
use App\Http\Controllers\ExplorePhotoContestController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoContestController;
use App\Http\Controllers\ProfilePortfolioController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PhotographerProfileController;
use App\Http\Controllers\PhotographerCompanyController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioDetailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SingleWinnerDetailsController;
use App\Http\Controllers\UserProfileUpdateController;
use App\Http\Controllers\WinnersController;

Route::get('contact', [ContactController::class,'contact'])->name('contact');

Route::get('about',[AboutController::class,'about'])->name('about');

Route::get('singlewinnerdetail',[SingleWinnerDetailsController::class,'singlewinnerdetail'])->name('singlewinnerdetail');

Route::get('/',[MainController::class,'main'])->name('main');

Route::get('allportfolio',[AllPortfolioController::class,'allportfolio'])->name('allportfolio');

Route::get('photographerprofile',[PhotographerProfileController::class,'photographerprofile'])->name('photographerprofile');

Route::get('userprofileupdate',[UserProfileUpdateController::class,'userprofileupdate'])->name('userprofileupdate');

Route::get('blog',[BlogPostController::class,'show'])->name('blogpost.show');

Route::get('blog/{id}', [BlogPostController::class, 'blogdetail'])->name('blogdetail.show');

Route::get('contest',[ExplorePhotoContestController::class,'explorephotocontest'])->name('explorephotocontest');

Route::get('contestdetail',[ContestDetailController::class,'contestdetail'])->name('contestdetail');


Route::group(['prefix'=>'packages'],function()
{

    // Add these routes for viewing packages
    Route::get('/view', [PackagesController::class, 'view'])->name('packages.view');


    Route::get('/create',[PackagesController::class,'create'])->name('packages.create');
    Route::post('/store',[PackagesController::class,'store'])->name('packages.store');
    Route::get('/edit/{id}',[PackagesController::class,'edit'])->name('packages.edit');
    Route::post('/update/{id}',[PackagesController::class,'update'])->name('packages.update');
    Route::get('/delete/{id}',[PackagesController::class,'delete'])->name('packages.delete');
    Route::get('/calculate-package-total/{id}', [PackagesController::class, 'calculateTotalPrice'])->name('calculate.package.total');

});

// Photographer Profile Portfolio   //
Route::group(['prefix'=>'profileportfolio'],function()
{


    Route::get('/create',[ProfilePortfolioController::class,'create'])->name('profileportfolio.create');
    Route::post('/store',[ProfilePortfolioController::class,'store'])->name('profileportfolio.store');
    Route::get('/edit/{id}',[ProfilePortfolioController::class,'edit'])->name('profileportfolio.edit');
    Route::post('/update/{id}',[ProfilePortfolioController::class,'update'])->name('profileportfolio.update');
    Route::get('/delete/{id}',[ProfilePortfolioController::class,'delete'])->name('profileportfolio.delete');

});

Route::get('/profileportfolio', [ProfilePortfolioController::class, 'view'])->name('profile.view');

// Photographer Booking  //

Route::get('/booking/{packageId}', [BookingController::class, 'bookingForm'])->name('bookingform');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/calculate-services-price/{id}', [BookingController::class, 'calculateTotalPrice'])->name('calculate.services.price');

