<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('test/{id?}', [HomeController::class, 'test']);
Route::get('about', [PageController::class, 'show']);
Route::resource('admin/post' , PostController::class, ['parameters' => [
    'post' => 'id'
]]);

Route::fallback(function(){
    return redirect()->route('post.index');
});
