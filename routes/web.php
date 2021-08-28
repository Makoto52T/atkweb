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


Route::get('/article/wizdom-wonders', function () {
    return view('article/wizdom-wonders');
});
Route::get('/article/ghost-house', function () {
    return view('article/ghost-house');
});
Route::get('/article/vampires-charm', function () {
    return view('article/vampires-charm');
});
Route::get('/article/three-monkeys', function () {
    return view('article/three-monkeys');
});
Route::get('/article/hotpot', function () {
    return view('article/hotpot');
});
Route::get('/article/ninja-vs-samurai', function () {
    return view('article/ninja-vs-samurai');
});
Route::get('/article/piggy-gold', function () {
    return view('article/piggy-gold');
});
Route::get('/article/phoenix-rises', function () {
    return view('article/phoenix-rises');
});
Route::get('/article/romo-plus', function () {
    return view('article/romo-plus');
});
Route::get('/article/dragon-hatch', function () {
    return view('article/dragon-hatch');
});
Route::get('/article/jurssic-kingdom', function () {
    return view('article/jurssic-kingdom');
});
Route::get('/article/ganesha-gold', function () {
    return view('article/ganesha-gold');
});
Route::get('/article/muay-thai-champion', function () {
    return view('article/muay-thai-champion');
});
Route::get('/article/santas-gift', function () {
    return view('article/santas-gift');
});
Route::get('/article/shaolin-soccer', function () {
    return view('article/shaolin-soccer');
});
Route::get('/article/ways-of-the-qilin', function () {
    return view('article/ways-of-the-qilin');
});
Route::get('/article/shiba-mogul', function () {
    return view('article/shiba-mogul');
});
Route::get('/article/tree-of-fortune', function () {
    return view('article/tree-of-fortune');
});
Route::get('/article/win-win-won', function () {
    return view('article/win-win-won');
});
Route::get('/article/hood-vs-wolf', function () {
    return view('article/hood-vs-wolf');
});
Route::get('/article/genies-3-gishes', function () {
    return view('article/genies-3-gishes');
});
Route::get('/article/reel-Love', function () {
    return view('article/reel-Love');
});
Route::get('/article/legend-of-hou-yi', function () {
    return view('article/legend-of-hou-yi');
});
Route::get('/article/egypt', function () {
    return view('article/egypt');
});
Route::get('/article/mahjong-ways', function () {
    return view('article/mahjong-ways');
});
Route::get('/article/galactic-gems', function () {
    return view('article/galactic-gems');
});
Route::get('/article/crypto-gold', function () {
    return view('article/crypto-gold');
});
Route::get('/article/majestic-treasures', function () {
    return view('article/majestic-treasures');
});
Route::get('/article/plushie-frenzy', function () {
    return view('article/plushie-frenzy');
});
Route::get('/article/mr.hallow-win', function () {
    return view('article/mr.hallow-win');
});
Route::get('/article/flirting-scholar', function () {
    return view('article/flirting-scholar');
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
