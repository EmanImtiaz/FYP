<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;

Route::get('admin',[AdminPanelController::class,'adminpanel'])->name('adminpanel');
