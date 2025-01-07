<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;



//Cards
Route::get('cards', [CardController::class, 'index'])->name('cards.index');
Route::get('cards/create', [CardController::class, 'create'])->name('cards.create');
Route::post('cards', [CardController::class, 'store'])->name('cards.store');
Route::put('cards/{card}/activate', [CardController::class, 'activate'])->name('cards.activate');
Route::put('cards/{card}/deactivate', [CardController::class, 'deactivate'])->name('cards.deactivate');
Route::put('cards/{card}/assign', [CardController::class, 'assign'])->name('cards.assign');


//Reviews
Route::resource('reviews', ReviewController::class)->except(['show']);

Route::resource('reviews', ReviewController::class);