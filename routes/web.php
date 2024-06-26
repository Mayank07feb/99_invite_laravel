<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/card_1', [HomeController::class, 'card_1'])->name('card_1');
Route::get('/card_2', [HomeController::class, 'card_2'])->name('card_2');
Route::get('/card_3', [HomeController::class, 'card_3'])->name('card_3');
