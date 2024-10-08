<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\CmsController;
use App\Http\Controllers\Web\Backend\UserController;
use App\Http\Controllers\Web\Backend\PropertyTypeController;



Route::get('categories', [CmsController::class, 'index'])->name('categories.index');


Route::get('AllUsers', [UserController::class, 'index'])->name('users.index');



Route::get('choseproperty/create', [CmsController::class, 'create'])->name('property.create');
Route::post('property/update', [CmsController::class, 'update'])->name('property.update');

// Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
