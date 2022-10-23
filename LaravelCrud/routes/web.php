<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index']) ->name('categories.index');


Route::get('/dashboard',function () {
    return view('dashboard');

})->name('dashboard');


Route::get('/user', function () {
    return view('user');
})->name('user');

Route::fallback(function () {
    dd("Tomar caua poron korte parbo na");
});

