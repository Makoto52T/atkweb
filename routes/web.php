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
    return view('home');
});


Route::get('wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('ghost-house', function () {return view('article/ghost-house');});
Route::get('vampires-charm', function () {return view('article/vampires-charm');});
Route::get('three-monkeys', function () {return view('article/three-monkeys');});
Route::get('hotpot', function () {return view('article/hotpot');});
Route::get('ninja-vs-samurai', function () {return view('article/ninja-vs-samurai');});
Route::get('piggy-gold', function () {return view('article/piggy-gold');});
Route::get('phoenix-rises', function () {return view('article/phoenix-rises');});
Route::get('romo-plus', function () {return view('article/romo-plus');});
Route::get('dragon-hatch', function () {return view('article/dragon-hatch');});
Route::get('jurssic-kingdom', function () {return view('article/jurssic-kingdom');});
Route::get('ganesha-gold', function () {return view('article/ganesha-gold');});
Route::get('muay-thai-champion', function () {return view('article/muay-thai-champion');});
Route::get('santas-gift', function () {return view('article/santas-gift');});
Route::get('shaolin-soccer', function () {return view('article/shaolin-soccer');});
Route::get('ways-of-the-qilin', function () {return view('article/ways-of-the-qilin');});
Route::get('shiba-mogul', function () {return view('article/shiba-mogul');});
Route::get('tree-of-fortune', function () {return view('article/tree-of-fortune');});
Route::get('win-win-won', function () {return view('article/win-win-won');});
Route::get('hood-vs-wolf', function () {return view('article/hood-vs-wolf');});
Route::get('genies-3-gishes', function () {return view('article/genies-3-gishes');});
Route::get('reel-love', function () {return view('article/reel-love');});
Route::get('legend-of-hou-yi', function () {return view('article/legend-of-hou-yi');});
Route::get('egypt', function () {return view('article/egypt');});
Route::get('mahjong-ways', function () {return view('article/mahjong-ways');});
Route::get('galactic-gems', function () {return view('article/galactic-gems');});
Route::get('crypto-gold', function () {return view('article/crypto-gold');});
Route::get('majestic-treasures', function () {return view('article/majestic-treasures');});
Route::get('plushie-frenzy', function () {return view('article/plushie-frenzy');});
Route::get('mr-hallow-win', function () {return view('article/mr-hallow-win');});
Route::get('flirting-scholar', function () {return view('article/flirting-scholar');});
Route::get('wild-bandito', function () {return view('article/wild-bandito');});

Route::get('wm', function () {return view('camp/wm');});
Route::get('sa', function () {return view('camp/sa');});
Route::get('dg', function () {return view('camp/dg');});
Route::get('prettygaming', function () {return view('camp/prettygaming');});
Route::get('ae', function () {return view('camp/ae');});
Route::get('pg', function () {return view('camp/pg');});
Route::get('pragmatic', function () {return view('camp/pragmatic');});
Route::get('asia', function () {return view('camp/asia');});

Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('linkincome', [FrontController::class, 'linkincome'])->name('linkincome');
Route::get('article', [FrontController::class, 'article'])->name('article');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('Game', [FrontController::class, 'Game'])->name('Game');
Route::get('football', [FrontController::class, 'football487'])->name('football');
Route::get('barcarat', [FrontController::class, 'barcarat'])->name('barcarat');
Route::get('slot', [FrontController::class, 'slot'])->name('slot');
Route::get('heilo', [FrontController::class, 'heilo'])->name('heilo');

Route::get('football', [FrontController::class, 'football487'])->name('football');
