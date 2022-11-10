<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', [PostController::class, 'index']);
// Route::get('/post/create', [PostController::class, 'create']);
// Route::post('/post/store', [PostController::class, 'store']);
// Route::get('/post/edit/{id}', [PostController::class, 'edit']);
// Route::put('/post/update/{id}', [PostController::class, 'update']);
// Route::delete('/post/delete/{id}', [PostController::class, 'delete']);
Route::resource('post', PostController::class);
Route::resource('profile', ProfileController::class);
