<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

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
Route::get('/artworks', [ArtworkController::class, 'index']);
Route::get('/artworks', 'ArtworkController@index')->name('artworks.index');
Route::get('/artworks/{artwork}/edit', 'ArtworkController@edit')->name('artworks.edit');
Route::delete('/artworks/{artwork}', 'ArtworkController@destroy')->name('artworks.destroy');
Route::get('/artworks/create', 'ArtworkController@create')->name('artworks.create');
Route::get('/artworks/create', [ArtworkController::class, 'create'])->name('artworks.create');
Route::post('/artworks', [ArtworkController::class, 'store'])->name('artworks.store');
