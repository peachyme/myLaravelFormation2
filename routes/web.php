<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;

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
    return view('auth.login');
});

//a stupid way to do it
// Route::get('/foo', [TestController::class , 'foo' ])->middleware('auth');
// Route::get('/bar', [TestController::class , 'bar' ])->middleware('auth');

Route::resource('posts', PostController::class);

//a smart way to do it :
Route::middleware(['is.admin'])->group(function(){
    Route::get('/foo', [TestController::class , 'foo' ]);
    Route::get('/bar', [TestController::class , 'bar' ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/placeholder', 'App\Http\Controllers\PlaceholderAPIController@index');

require __DIR__.'/auth.php';
