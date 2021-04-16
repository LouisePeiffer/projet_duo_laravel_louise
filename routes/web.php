<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// FRONT
Route::get('/', [FrontController::class, 'home']) -> name('home');
Route::get('/blog', [FrontController::class, 'blog']) -> name('blog');
Route::get('/portfolio', [FrontController::class, 'portfolio']) -> name('portfolio');
Route::get('/contact', [FrontController::class, 'contact']) -> name('contact');

// BACK
// --- CRUD -> Read
Route::get('/admin',[AdminController::class, 'index'])->name('admin');

// --- CRUD -> Create
//BLOG
Route::get('/createBlog', [BlogController::class, 'create'])->name('create.blog');
Route::post('/storeBlog', [BlogController::class, 'store'])->name('store.blog');

//PORTFOLIO 
Route::get('/createPortfolio', [PortfolioController::class, 'create'])->name('create.portfolio');
Route::post('/storePortfolio', [PortfolioController::class, 'store'])->name('store.portfolio');


// --- CRUD -> Delete 
//BLOG
Route::delete('/{id}/blogDelete', [BlogController::class, 'destroy'])->name('destroy.blog');

//PORTFOLIO
Route::delete('/{id}/portfolioDelete', [PortfolioController::class, 'destroy'])->name('destroy.portfolio');
