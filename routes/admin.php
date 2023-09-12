<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\SliderController;


Route::get('admin',[AdminPanelController::class,'adminpanel'])->name('adminpanel');

Route::group(['prefix'=>'slider'],function()
{

    Route::get('/',[SliderController::class,'index'])->name('slider.index');
    Route::get('/create',[SliderController::class,'create'])->name('slider.create');
    Route::post('/store',[SliderController::class,'store'])->name('slider.store');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/update/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');



});

Route::group(['prefix'=>'admin'],function()
{

    Route::group(['prefix'=>'slider'],function()
{

    Route::get('/',[SliderController::class,'index'])->name('slider.index');
    Route::get('/create',[SliderController::class,'create'])->name('slider.create');
    Route::post('/store',[SliderController::class,'store'])->name('slider.store');

});



});
