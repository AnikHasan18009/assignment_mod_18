<?php

use App\Http\Controllers\CategoryController;
use App\Models\Post;
use App\Http\Controllers\GetAllPosts;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SoftDeleteController;
use App\Models\Category;

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

Route::get('/', function () {
    return view('welcome');
});

//Question 5
Route::get("/posts",[GetAllPosts::class,'getPosts']);
//Question 6 
Route::get("/postCount/{id}",function(Request $request, $id)
{
    return Post::postCount($id);
});

//Question 7
Route::get("/posts/{id}/delete",[SoftDeleteController::class,'deleteById']);

//Question 8
Route::get("/posts/softDeleted",[SoftDeleteController::class,'getSoftDeletedPosts']);
//Question 9
Route::get("/posts",[PostController::class,'getAllPosts']);

//Question 10
Route::get("/categories/{id}/posts",[CategoryController::class,'getPostByCategory']);

//Question 12
Route::get("/categories/latestposts",[CategoryController::class,'getLatestPostByCategory']);

