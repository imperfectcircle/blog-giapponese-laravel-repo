<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class, 'index'])->name('homepage');
Route::get('/article/create', [ArticleController::class, 'create'])->name('newArticle');
Route::post('/article/store', [ArticleController::class, 'store'])->name('storeArticle');
Route::get('/article/detail/{article}', [ArticleController::class, 'show'])->name('article.detail');
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('editArticle');
Route::put('article/update/{article}', [ArticleController::class, 'update'])->name('updateArticle');
Route::delete('article/delete/{article}', [ArticleController::class, 'destroy'])->name('deleteArticle');
Route::get('/article/user', [ArticleController::class, 'userArticle'])->name('articleUser');
Route::get('/user/userPanel', [UserController::class, 'userPanel'])->name('userPanel');
Route::post('/user/editUser', [UserController::class, 'editUser'])->name('editUser');