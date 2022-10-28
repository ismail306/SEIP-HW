<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/additem', [CategoryController::class, 'create'])->name('category.create');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/user', function () {
    return view('user');
})->name('user');




Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::fallback(function () {
    dd("Tomar caua poron korte parbo na");
});
