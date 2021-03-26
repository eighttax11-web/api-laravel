<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('post.index');

