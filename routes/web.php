<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController ;
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

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/posts', [PostController::class, 'getallpost'])->name('posts.getallpost');
Route :: get('/add-post', [PostController::class, 'addPost'])->name('add.post');
Route :: post('/add-post', [PostController::class, 'addpostsubmit'])->name('post.submit');
Route :: get('/posts/{id}',[PostController::class, 'getpostById'])->name('post.getByid');
Route :: get('/delete-post/{id}',[PostController::class, 'deletepost'])->name('post.delete');
Route :: get('/edit-post/{id}',[PostController::class, 'editpost'])->name('post.edit');
Route :: post('/update-post',[PostController::class, 'updatePost'])->name('post.update');





