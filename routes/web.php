<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Rotta per la home page che carica la vista welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

// Mostra la lista dei prodotti
Route::get('/products', [ProductController::class, 'index'])->name('product.index');

// Mostra il form per creare un nuovo prodotto 
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');

// Salva il prodotto nel database quando invii il form
Route::post('/products', [ProductController::class, 'store'])->name('product.store');