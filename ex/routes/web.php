<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Database\Schema\PostgresSchemaState;

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

Route::get('/', [PostController::class, 'index']);

Route::get('posts/add', [PostController::class, 'create']);
Route::post('store/create', [PostController::class, 'store'])->name("poststore");

/*
GET /posts    //hämtar alla posts
POST /posts   //lägger till en post
DELETE /posts //ta bort alla posts

GET /posts/add

GET /posts/:id   //hämtar en post
PUT /posts/:id   //redigerar en post
DELETE /posts/:id //tar bort en post

GET /posts/:id/comments //hämtar alla kommentarer
*/