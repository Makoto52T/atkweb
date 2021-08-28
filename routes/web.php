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
// Route Article
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/ghost-house', function () {return view('article/ghost-house');});
Route::get('/article/vampires-charm', function () {return view('article/vampires-charm');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});
Route::get('/article/wizdom-wonders', function () {return view('article/wizdom-wonders');});

            <a href="article/three-monkeys.blade.php"><img src="/images/article/Three Monkeys/three-monkeys.png" style="width:100%"></a>
            <a href="article/hotpot.blade.php"><img src="/images/article/Hotpot/hotpot.png" style="width:100%"></a>
            <a href="article/ninja-vs-samurai.blade.php"><img src="/images/article/ninja vs samurai/ninja-vs-samurai.png" style="width:100%"></a>
            <a href="article/piggy-gold.blade.php"><img src="/images/article/Piggy Gold/piggy-gold.png" style="width:100%"></a>
            <a href="article/phoenix-rises.blade.php"><img src="/images/article/Phoenix Rises/phonix.png" style="width:100%"></a>
        </div>
        <div class="column">
            <a href="article/romo-plus.blade.php"><img src="/images/article/Roma Plus/Roma-plus-1.png" style="width:100%"></a>
            <a href="article/dragon-hatch.blade.php"><img src="/images/article/Dragon Hatch/dragon-hatch-min-1.png" style="width:100%"></a>
            <a href="article/jurssic-kingdom.blade.php"><img src="/images/article/jurssic kingdom/Jurassic Kingdom.webp" style="width:100%"></a>
            <a href="article/wild-bandito.blade.php"><img src="/images/article/Wild Bandito/Wild-Bandito-min.png" style="width:100%"></a>
            <a href="article/ganesha-gold.blade.php"><img src="/images/article/Ganesha Gold/ganesha-gold-min.png" style="width:100%"></a>
            <a href="article/muay-thai-champion.blade.php"><img src="/images/article/muay thai c/muay-thai-champion.png" style="width:100%"></a>
            <a href="article/santas-gift.blade.php"><img src="/images/article/Santas Gift/santas-gift-rush.png" style="width:100%"></a>
            <a href="article/shaolin-soccer.blade.php"><img src="/images/article/Shaolin Soccer/pg-slot-shaolin-soccer-game.png" style="width:100%"></a>

        </div>
        <div class="column">
            <a href="article/ways-of-the-qilin.blade.php"><img src="/images/article/ways of the qilin/Ways-of-the-Qilinlogo2-min.png" style="width:100%"></a>
            <a href="article/shiba-mogul.blade.php"><img src="/images/article/Shiba Mogul/SHIBAMOGUL.png" style="width:100%"></a>
            <a href="article/tree-of-fortune.blade.php"><img src="/images/article/Tree Of Fortune/Tree-Of-Fortune.png" style="width:100%"></a>
            <a href="article/win-win-won.blade.php"><img src="/images/article/win win won/win-win-won.png" style="width:100%"></a>
            <a href="article/hood-vs-wolf.blade.php"><img src="/images/article/Hood vs Wolf/hood-wolf.png" style="width:100%"></a>
            <a href="article/genies-3-gishes.blade.php"><img src="/images/article/Genie's 3 Wishes/genies-wishes.png" style="width:100%"></a>
            <a href="article/reel-Love.blade.php"><img src="/images/article/Reel Love/reel-love-1.png" style="width:100%"></a>
            <a href="article/legend-of-hou-yi.blade.php"><img src="/images/article/Legend of Hou Yi/legend-of-hou-yi.png" style="width:100%"></a>

        </div>
        <div class="column">
            <a href="article/egypt.blade.php"><img src="/images/article/egypt's book of mystery/ปก-Egypts-Book-of-Mystery.png" style="width:100%"></a>
            <a href="article/mahjong-ways.blade.php"><img src="/images/article/Mahjong Ways/mahjong-ways.png" style="width:100%"></a>
            <a href="article/galactic-gems.blade.php"><img src="/images/article/Galactic Gems/galactic-gems.png" style="width:100%"></a>
            <a href="article/crypto-gold.blade.php"><img src="/images/article/Crypto Gold/crypto-gold.png" style="width:100%"></a>
            <a href="article/majestic-treasures.blade.php"><img src="/images/article/Majestic Treasures/majestic-ts-min.png.png" style="width:100%"></a>
            <a href="article/plushie-frenzy.blade.php"><img src="/images/article/Plushie Frenzy/plushie-frenzy.png" style="width:100%"></a>
            <a href="article/mr.hallow-win.blade.php"><img src="/images/article/Mr. Hallow-Win/mr-hallow-win.png" style="width:100%"></a>
            <a href="article/flirting-scholar.blade.php"><img src="/images/article/Flirting Scholar/Flirting-Scholar.png" style="width:100%"></a>


Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('linkincome', [FrontController::class, 'linkincome'])->name('linkincome');
Route::get('article', [FrontController::class, 'article'])->name('article');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('Game', [FrontController::class, 'Game'])->name('Game');
Route::get('football', [FrontController::class, 'football'])->name('football');
Route::get('barcarat', [FrontController::class, 'barcarat'])->name('barcarat');
Route::get('slot', [FrontController::class, 'slot'])->name('slot');
Route::get('heilo', [FrontController::class, 'heilo'])->name('heilo');