<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostSessionController;

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

Route::get('/', fn() => redirect('/posts'));
Route::get('/posts', [PostSessionController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostSessionController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostSessionController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [PostSessionController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostSessionController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostSessionController::class, 'destroy'])->name('posts.destroy');
