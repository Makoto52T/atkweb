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

// slot game
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

//top bradner
Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('linkincome', [FrontController::class, 'linkincome'])->name('linkincome');
Route::get('article', [FrontController::class, 'article'])->name('article');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('Game', [FrontController::class, 'Game'])->name('Game');
Route::get('football', [FrontController::class, 'football487'])->name('football');
Route::get('barcarat', [FrontController::class, 'barcarat'])->name('barcarat');
Route::get('slot', [FrontController::class, 'slot'])->name('slot');
Route::get('heilo', [FrontController::class, 'heilo'])->name('heilo');
Route::get('lottery', [FrontController::class, 'lottery487'])->name('lottery');

// new article
Route::get('slot-formula', function () {return view('slot/slot-formula');});

Route::get('news1', function () {return view('lottery/news/news1');});
Route::get('news2', function () {return view('lottery/news/news2');});
Route::get('news3', function () {return view('lottery/news/news3');});
Route::get('news4', function () {return view('lottery/news/news4');});
Route::get('news5', function () {return view('lottery/news/news5');});
Route::get('news6', function () {return view('lottery/news/news6');});
Route::get('news7', function () {return view('lottery/news/news7');});
Route::get('news8', function () {return view('lottery/news/news8');});
Route::get('news9', function () {return view('lottery/news/news9');});
Route::get('news10', function () {return view('lottery/news/news10');});
Route::get('news11', function () {return view('lottery/news/news11');});
Route::get('news12', function () {return view('lottery/news/news12');});
Route::get('news13', function () {return view('lottery/news/news13');});
Route::get('news14', function () {return view('lottery/news/news14');});
Route::get('news15', function () {return view('lottery/news/news15');});
Route::get('news16', function () {return view('lottery/news/news16');});
Route::get('news17', function () {return view('lottery/news/news17');});
Route::get('news18', function () {return view('lottery/news/news18');});
Route::get('news19', function () {return view('lottery/news/news19');});
Route::get('news20', function () {return view('lottery/news/news20');});
Route::get('news21', function () {return view('lottery/news/news21');});
Route::get('news22', function () {return view('lottery/news/news22');});

Route::get('new1', function () {return view('football/new/new1');});
Route::get('new2', function () {return view('football/new/new2');});
Route::get('new3', function () {return view('football/new/new3');});
Route::get('new4', function () {return view('football/new/new4');});
Route::get('new5', function () {return view('football/new/new5');});
Route::get('new6', function () {return view('football/new/new6');});
Route::get('new7', function () {return view('football/new/new7');});
Route::get('new8', function () {return view('football/new/new8');});
Route::get('new9', function () {return view('football/new/new9');});
Route::get('new10', function () {return view('football/new/new10');});
