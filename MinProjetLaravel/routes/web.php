<?php

use App\Http\Controllers\PostController;
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
// Route::get('/Post', function() {
    
//     return view('Post')->with('CategorieController@index')->
//                  with('PostController@index');
//  });
// Route::get('/TablePost', function () {
//     return view('TablePost');
// });
// Route::get('/Post', function () {
//     return view('Post');
  
// });
// Route::GET('/Post','PostController@index');
// Route::GET('/TablePost','PostController@index','CategorieController@index');

// Route::GET('/Post','CategorieController@index');
// Route::resource('Post','TagController');
// Route::resource('Post','CategorieController');
// Route::resource('Post','CategorieController');
Route::resource('posts',PostController::class);
Route::resource('TablePost',PostController::class);


// Route::POST('/Post','PostController@show');











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
