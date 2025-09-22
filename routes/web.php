<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/second', [TestController::class, 'second'])->name('second');

Route::get('/third', [TestController::class, 'third'])->name('third');

Route::get('/home', [TestController::class, 'homee'])->name('homee');

Route::get('/array', [TestController::class, 'arraycing'])->name('arraycing');