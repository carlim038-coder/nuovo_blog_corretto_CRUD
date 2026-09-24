<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');


Route::middleware('auth')->group(function () {
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    
    Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
});


Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');