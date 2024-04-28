<?php

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

define('ID_REGEX', '[0-9]+');
define('SLUG_REGEX', '[0-9a-z\-]+');

Route::get('/', [\App\Http\Controllers\Front\HomeController::class,'index']);

Route::prefix('books')->name('books.')->group(function (){
    Route::get('/',[\App\Http\Controllers\Front\BookController::class,'index'])->name('index');
    Route::post('/download/{book}-{slug}',[\App\Http\Controllers\Front\BookController::class,'download'])->where([
        'book'=>constant('ID_REGEX'),
        'slug'=>constant('SLUG_REGEX')
    ])->name('download');
    Route::get('/{book}-{slug}',[\App\Http\Controllers\Front\BookController::class,'show'])->where([
        'book'=>constant('ID_REGEX'),
        'slug'=>constant('SLUG_REGEX')
    ])->name('show');
});

Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'doLogin']);
Route::delete('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::prefix('admin')->middleware(\App\Http\Middleware\IsAdmin::class)->name('admin.')->group(function(){
    Route::get('/', function(){ return redirect(route('admin.books.index'));})->name('index');
    Route::resource('books',\App\Http\Controllers\Admin\BookController::class)->except(['show']); 
    Route::resource('publishers',\App\Http\Controllers\Admin\PublisherController::class)->except(['show']);
    Route::resource('tags',\App\Http\Controllers\Admin\TagController::class)->except(['show']); 
 });