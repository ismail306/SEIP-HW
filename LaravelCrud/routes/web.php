<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');


Route::get('/user', function () {
    return view('user');
})->name('user');

Route::fallback(function () {
    dd("Tomar caua poron korte parbo na");
});

// Route::get('/user/{id}', function () {
//     dd("Showing");

// }) ->name('user.show');

// Route::get('/user/show', function () {
//    return view('user.show');

// });