<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //追加
use App\Models\Post; //追加
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//本：ダッシュボード表示(books.blade.php)
Route::get('/', [PostController::class,'index'])->middleware(['auth'])->name('post_index');
Route::get('/dashboard', [PostController::class,'index'])->middleware(['auth'])->name('dashboard');

//本：追加 
Route::post('/posts',[PostController::class,"store"])->name('post_store');

//本：削除 
Route::delete('/post/{post}', [PostController::class,"destroy"])->name('post_destroy');

//本：更新画面
Route::post('/postsedit/{post}',[PostController::class,"edit"])->name('post_edit'); //通常
Route::get('/postsedit/{book}', [PostController::class,"edit"])->name('edit');      //Validationエラーありの場合

//本：更新画面
Route::post('/posts/update',[PostController::class,"update"])->name('post_update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
