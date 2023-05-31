<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToukouController;
use App\Http\Controllers\MangasRankingController;
use App\Http\Controllers\NovelsRankingController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\TodayMangaController;
use App\Http\Controllers\TodayNovelController;
use App\Models\Mangas;
use App\Models\Novels;


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

Route::get('/Toukosite/{id}/{flag}',[ToukouController::class,'show'])->name('Toukousite.show');
Route::get('/Toukosite/edit/{id}/{flag}',[ToukouController::class,'edit'])->name('Toukousite.edit');
Route::resource('/Toukousite', ToukouController::class)->except(['create','edit','show','edit']);
Route::resource('/mangasranking', MangasRankingController::class);
Route::resource('/novelsranking', NovelsRankingController::class);
Route::resource('/manga', MangaController::class);
Route::resource('/novel', NovelController::class);
Route::resource('/todaymanga', TodayMangaController::class);
Route::resource('/todaynovel', TodayNovelController::class);




Route::middleware('auth')->group(function () {
    Route::get('/Toukou', [ToukouController::class, 'create'])->name('Toukousite.create');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
