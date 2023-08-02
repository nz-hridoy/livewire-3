<?php

use App\Livewire\App\IndexComponent;
use App\Livewire\App\Post\AddPostComponent;
use App\Livewire\App\Post\EditPostComponent;
use App\Livewire\App\Post\PostComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', IndexComponent::class)->name('app.index');
Route::get('/posts', PostComponent::class)->name('app.allPosts');
Route::get('/posts/add-new', AddPostComponent::class)->name('app.addPost');
Route::get('/posts/edit/{id}', EditPostComponent::class)->name('app.editPost');
