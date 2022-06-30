<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index'])->name('welcome');

// Post
Route::get('/article/ajouter',[PostController::class,'create'])->name('post.create');
Route::post('article/ajouter',[PostController::class,'store'])->name('post.store');
Route::get('/article/{post:slug}',[PostController::class,'show'])->name('post.show');
Route::get('/article/editer/{post:slug}',[PostController::class,'edit'])->name('post.edit');
Route::put('/article/editer/{post:slug}',[PostController::class,'update'])->name('post.update');
Route::delete('/article/supprimer/{post:slug}',[PostController::class,'destroy'])->name('post.delete');

// Categories
// Passer un slug plutôt qu'un ID, attention, il faut alors changer la structure de la table (migration)
Route::get('/cat/{category:id}',[CategoryController::class,'getRelatedPosts'])->name('category.getRelatedPosts');

// A vous de continuer ...