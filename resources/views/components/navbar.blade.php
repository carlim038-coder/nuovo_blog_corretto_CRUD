<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// 1. Pagine pubbliche fisse
Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// 2. Pagine protette dal login (Metti tutte le rotte fisse /create, /edit qui dentro)
Route::middleware('auth')->group(function () {
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    
    Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
});

// 3. La rotta con il parametro dinamico {article} va SEMPRE messa per ultima
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');