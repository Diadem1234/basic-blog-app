<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('posts')->name('posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('{post}/show', [PostController::class, 'show'])->name('show');
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('create', [PostController::class, 'store'])->name('store');
    Route::get('{post}/confirm', [PostController::class, 'confirm_delete'])->name('confirm');
    Route::get('{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('{post}', [PostController::class, 'update'])->name('update');
    Route::delete('{post}', [PostController::class, 'destroy'])->name('destroy');
});

Auth::routes();
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->names('admin.posts');
    Route::resource('admin/users', AdminUserController::class)->names('admin.users');
    Route::get('admin/{user}/confirm', [AdminUserController::class, 'confirm_delete'])->name('admin.users.confirm');
    Route::get('admin/{post}/confirm', [AdminPostController::class, 'confirm_delete'])->name('admin.posts.confirm');
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

