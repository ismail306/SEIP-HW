<?php
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PublicController::class, 'landidnPage']);
