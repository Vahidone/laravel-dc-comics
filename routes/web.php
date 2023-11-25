<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ComicController;



Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource("comics", ComicController::class);
