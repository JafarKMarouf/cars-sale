<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeaturedCarsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewCarsController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)
    ->group(function(){
        Route::get('/','index')->name('home.index');
    });

Route::controller(ServiceController::class)
    ->prefix('services')
    ->group(function() {
        Route::get('/', 'index')->name('services.index');
    });

Route::controller(FeaturedCarsController::class)
    ->prefix('featured-cars')
    ->group(function() {
        Route::get('/', 'index')->name('featured-cars.index');
    });

Route::controller(NewCarsController::class)
    ->prefix('new-cars')
    ->group(function() {
        Route::get('/', 'index')->name('new-cars.index');
    });

Route::controller(BrandController::class)
    ->prefix('brand')
    ->group(function() {
        Route::get('/', 'index')->name('brand.index');
    });


