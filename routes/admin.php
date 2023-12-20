<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PackageServiceController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\PhotosContestController;
use App\Http\Controllers\ProfileCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePortfolioController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TownController;
use App\Http\Controllers\UserController;

// Route::get('admin',[AdminPanelController::class,'adminpanel'])->name('adminpanel');



Route::group(['prefix'=>'admin'],function()
{
    Route::get('/',[AdminPanelController::class,'adminpanel'])->name('adminpanel');

// Slider //
    Route::group(['prefix'=>'slider'],function()
{

    Route::get('/',[SliderController::class,'index'])->name('slider.index');
    Route::get('/create',[SliderController::class,'create'])->name('slider.create');
    Route::post('/store',[SliderController::class,'store'])->name('slider.store');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/update/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');

});

// Location routes //
// Province //
Route::group(['prefix'=>'province'],function()
{

    Route::get('/',[ProvinceController::class,'index'])->name('province.index');
    Route::get('/create',[ProvinceController::class,'create'])->name('province.create');
    Route::post('/store',[ProvinceController::class,'store'])->name('province.store');
    Route::get('/edit/{id}',[ProvinceController::class,'edit'])->name('province.edit');
    Route::post('/update/{id}',[ProvinceController::class,'update'])->name('province.update');
    Route::get('/delete/{id}',[ProvinceController::class,'delete'])->name('province.delete');

});

// Location routes //
// City //
Route::group(['prefix'=>'city'],function()
{

    Route::get('/',[CityController::class,'index'])->name('city.index');
    Route::get('/create',[CityController::class,'create'])->name('city.create');
    Route::post('/store',[CityController::class,'store'])->name('city.store');
    Route::get('/edit/{id}',[CityController::class,'edit'])->name('city.edit');
    Route::post('/update/{id}',[CityController::class,'update'])->name('city.update');
    Route::get('/delete/{id}',[CityController::class,'delete'])->name('city.delete');

});

// Location routes //
// Town //
Route::group(['prefix'=>'town'],function()
{

    Route::get('/',[TownController::class,'index'])->name('town.index');
    Route::get('/create',[TownController::class,'create'])->name('town.create');
    Route::post('/store',[TownController::class,'store'])->name('town.store');
    Route::get('/edit/{id}',[TownController::class,'edit'])->name('town.edit');
    Route::post('/update/{id}',[TownController::class,'update'])->name('town.update');
    Route::get('/delete/{id}',[TownController::class,'delete'])->name('town.delete');

});

// Contest //
// Category //
Route::group(['prefix'=>'category'],function()
{

    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

});

// Contest //
// PhotosContest //
Route::group(['prefix'=>'photoscontest'],function()
{

    Route::get('/',[PhotosContestController::class,'index'])->name('photoscontest.index');
    Route::get('/create',[PhotosContestController::class,'create'])->name('photoscontest.create');
    Route::post('/store',[PhotosContestController::class,'store'])->name('photoscontest.store');
    Route::get('/edit/{id}',[PhotosContestController::class,'edit'])->name('photoscontest.edit');
    Route::post('/update/{id}',[PhotosContestController::class,'update'])->name('photoscontest.update');
    Route::get('/delete/{id}',[PhotosContestController::class,'delete'])->name('photoscontest.delete');

});

// Services //
Route::group(['prefix'=>'services'],function()
{

    Route::get('/',[ServicesController::class,'index'])->name('services.index');
    Route::get('/create',[ServicesController::class,'create'])->name('services.create');
    Route::post('/store',[ServicesController::class,'store'])->name('services.store');
    Route::get('/edit/{id}',[ServicesController::class,'edit'])->name('services.edit');
    Route::post('/update/{id}',[ServicesController::class,'update'])->name('services.update');
    Route::get('/delete/{id}',[ServicesController::class,'delete'])->name('services.delete');

});
// Packages //

Route::get('/',[PackagesController::class,'index'])->name('packages.index');


// Photographer Profile Portfolio Portion (Category) //
Route::group(['prefix'=>'profilecategory'],function()
{

    Route::get('/',[ProfileCategoryController::class,'index'])->name('profilecategory.index');
    Route::get('/create',[ProfileCategoryController::class,'create'])->name('profilecategory.create');
    Route::post('/store',[ProfileCategoryController::class,'store'])->name('profilecategory.store');
    Route::get('/edit/{id}',[ProfileCategoryController::class,'edit'])->name('profilecategory.edit');
    Route::post('/update/{id}',[ProfileCategoryController::class,'update'])->name('profilecategory.update');
    Route::get('/delete/{id}',[ProfileCategoryController::class,'delete'])->name('profilecategory.delete');

});
// Photographer Profile Portfolio   //
Route::group(['prefix'=>'profileportfolio'],function()
{

    Route::get('/',[ProfilePortfolioController::class,'index'])->name('profileportfolio.index');
    Route::get('/create',[ProfilePortfolioController::class,'create'])->name('profileportfolio.create');
    Route::post('/store',[ProfilePortfolioController::class,'store'])->name('profileportfolio.store');
    Route::get('/edit/{id}',[ProfilePortfolioController::class,'edit'])->name('profileportfolio.edit');
    Route::post('/update/{id}',[ProfilePortfolioController::class,'update'])->name('profileportfolio.update');
    Route::get('/delete/{id}',[ProfilePortfolioController::class,'delete'])->name('profileportfolio.delete');

});
Route::group(['prefix'=>'blog'],function()
{

    Route::get('/',[BlogPostController::class,'index'])->name('blogpost.index');
    Route::get('/create',[BlogPostController::class,'create'])->name('blogpost.create');
    Route::post('/store',[BlogPostController::class,'store'])->name('blogpost.store');
    Route::get('/edit/{id}',[BlogPostController::class,'edit'])->name('blogpost.edit');
    Route::post('/update/{id}',[BlogPostController::class,'update'])->name('blogpost.update');
    Route::get('/delete/{id}',[BlogPostController::class,'delete'])->name('blogpost.delete');

});

Route::group(['prefix'=>'booking'],function()
{

    Route::get('/',[BookingController::class,'index'])->name('booking.index');
    Route::get('/create',[BookingController::class,'create'])->name('booking.create');
    Route::post('/store',[BookingController::class,'store'])->name('booking.store');


});

// user admin panel
Route::get('/user', [ProfileController::class, 'userindex'])->name('profile.index');
Route::get('/photographer', [ProfileController::class, 'photographerindex'])->name('photogrpherprofile.index');
Route::put('/photographer/approve/{id}', [ProfileController::class, 'approvePhotographerProfile'])->name('photogrpherprofile.approve');
Route::put('/photographer/disapprove/{id}', [ProfileController::class, 'disapprovePhotographerProfile'])->name('photogrpherprofile.disapprove');


});

Route::group(['prefix'=>'photographer'],function()
{

    Route::get('/',[PhotographerController::class,'photographerpanel'])->name('photographer');

});



