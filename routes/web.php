<?php

use Illuminate\Support\Facades\Route;
  
  
use App\Http\Controllers\FrontController;
  
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
// Route::get('/article', function () {return view('article');});
Route::get('/article/wizdom-wonders', function () {
    return view('article/wizdom-wonders');
});


Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('linkincome', [FrontController::class, 'linkincome'])->name('linkincome');
Route::get('article', [FrontController::class, 'article'])->name('article');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('Game', [FrontController::class, 'Game'])->name('Game');
Route::get('football', [FrontController::class, 'football'])->name('football');
Route::get('barcarat', [FrontController::class, 'barcarat'])->name('barcarat');
Route::get('slot', [FrontController::class, 'slot'])->name('slot');
Route::get('heilo', [FrontController::class, 'heilo'])->name('heilo');