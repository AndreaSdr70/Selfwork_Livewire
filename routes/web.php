<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
// use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

// Route::get('/', function () {
//     return view('welcome');});

//Article controller
// Create
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');