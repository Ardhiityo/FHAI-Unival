<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsSectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/news/{newsSection:slug}', [NewsSectionController::class, 'show'])->name('news.show');
