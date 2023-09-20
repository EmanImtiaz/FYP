<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\PhotosContestController;
use App\Http\Controllers\ProvinceController;
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


});

Route::group(['prefix'=>'photographer'],function()
{

    Route::get('/',[PhotographerController::class,'photographerpanel'])->name('photographer');

});



