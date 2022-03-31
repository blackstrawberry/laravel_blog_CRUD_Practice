<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('Posts.index');
});

// Route::get('/posts', function () {
//     return view('Posts.blog_list');
// });


Route::get('/posts', [PostsController::class, 'index']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{post}', [PostsController::class, 'update']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);

Auth::routes();
