<?php

use App\Http\Controllers\ProdactController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/second', [TestController::class, 'second'])->name('second');

Route::get('/third', [TestController::class, 'third'])->name('third');

Route::get('/home', [TestController::class, 'homee'])->name('homee');

Route::get('/array', [TestController::class, 'arraycing'])->name('arraycing');



Route::get('/products', [ProdactController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProdactController::class, 'create'])->name('products.create');

Route::post('/products', [ProdactController::class, 'store'])->name('products.store');

Route::get('/products/{product}', [ProdactController::class, 'show'])->name('products.show');

Route::get('/products/{product}/edit', [ProdactController::class, 'edit'])->name('products.edit');

Route::put('/products/{product}', [ProdactController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProdactController::class, 'destroy'])->name('products.destroy');