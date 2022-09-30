<?php

use App\Http\Controllers\TheMovieController;
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

Route::get('/', [TheMovieController::class, 'getMovie'])->name('/');
Route::get('/nowplaying', [TheMovieController::class, 'nowPlaying'])->name('playing');
Route::get('/popular', [TheMovieController::class, 'popular'])->name('popular');
Route::get('/toprated', [TheMovieController::class, 'toprated'])->name('toprated');
Route::get('/upcoming', [TheMovieController::class, 'upcoming'])->name('upcoming');
Route::get('/details/{id}', [TheMovieController::class, 'details'])->name('details');
Route::post('/addcategory', [TheMovieController::class, 'create'])->name('addcategory');
