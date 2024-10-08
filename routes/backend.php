<?php

use App\Http\Controllers\Web\Backend\AminitiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\CategoryController;
use App\Http\Controllers\Web\Backend\PropertyTypeController;



//Category Routes
Route::controller(CategoryController::class)->group(function (){
    Route::get('categories','index')->name('categories.index');
    Route::get('categories/create','create')->name('categories.create');
    Route::post('categories','store')->name('categories.store');
    Route::get('categories/{id}/edit','edit')->name('categories.edit');
    Route::put('categories/{id}','update')->name('categories.update');
    Route::delete('categories/{id}','destroy')->name('categories.destroy');
});



//Property Type Routes
Route::controller(PropertyTypeController::class)->group( function () {
    Route::get('property-types','index')->name('property-types.index');
    Route::get('property-types/create','create')->name('property-types.create');
    Route::post('property-types','store')->name('property-types.store');
    Route::get('property-types/{id}/edit','edit')->name('property-types.edit');
    Route::put('property-types/{id}','update')->name('property-types.update');
    Route::delete('property-types/{id}','destroy')->name('property-types.destroy');

});


//Aminities Routes
Route::controller(AminitiesController::class)->group(function (){
    Route::get('aminities','index')->name('aminities.index');
    ROute::get('aminities/create','create')->name('aminities.create');
    Route::post('aminities','store')->name('aminities.store');
    Route::get('aminities/{id}/edit','edit')->name('aminities.edit');
    Route::put('aminities/{id}','update')->name('aminities.update');
    Route::delete('aminities/{id}','destroy')->name('aminities.destroy');
});



