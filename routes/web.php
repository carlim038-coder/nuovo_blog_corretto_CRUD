<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Rotte pubbliche aperte a tutti
Route::get('/', [ArticleController::class, 'home'])->name('welcome');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// Rotte protette (richiedono il login) - MESSE PRIMA di /{article}
Route::middleware('auth')->group(function () {
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/article/dashboard', [ArticleController::class, 'dashboard'])->name('article.dashboard'); // <-- AGGIUNGI QUESTA
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
});

// Rotte dinamiche con parametro alla fine
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');