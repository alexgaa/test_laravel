<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', function () {
    $title = "Home Page";
    return view('home', ['titleName' => $title]);
})->name('home');

Route::get('/home/{id}/{name?}', function ($id, $value2 = 'ww') {
    $title = "Home Page ID";

    return view('home_id', ['titleName' => $title, 'id' => $id, 'value2' => $value2]);
});
//->where(['id' => '[0-9]+', 'name' => '[A-Za-z0-9-]+']);

Route::match(['put','get'], '/contact2', function () {
    $title = "Contact Page";
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact', ['titleName' => $title]);
})->name("contact");

Route::view('test', 'test', ['titleName' => 'Test Page']);
Route::redirect('test2', 'test');

Route::prefix('admin')->group(function (){

    Route::get('post',function (){
        return 'Post List';
    });

    Route::get('post/create',function (){
        return 'Post Create';
    });

    Route::get('post/{id}/edit',function ($id){
        return "Edit Post $id";
    })->name('post_id');

});
Route::fallback(function(){
    return redirect()->route('home');
});
