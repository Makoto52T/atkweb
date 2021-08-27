@extends('layouts.app')
  
@section('content')
<div class="container">
                <!-- Header -->
                <div class="headerArt">
                  <h1>Slot Game แนะนำ</h1>
                  <p>Resize the browser window to see the responsive effect.</p>
                </div>
                    
                <!-- Photo Grid -->
                <div class="rowArticle">
                    <div class="column">
                        <a href="article/wizdom-wonders"><img src="/images/article/wizdom-wonders/wizdom-wonders-min.png" style="width:100%"></a>
                        <a ng-click="articleFunc('ghost house')"><img src="/images/article/Ghost House/ghost-house-189x300.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Vampire’s Charm')"><img src="/images/article/Vampire’s Charm/vampires-charm.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Three Monkeys')"><img src="/images/article/Three Monkeys/three-monkeys.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Hotpot')"><img src="/images/article/Hotpot/hotpot.png" style="width:100%"></a>
                        <a ng-click="articleFunc('ninja vs samurai')"><img src="/images/article/ninja-vs-samurai.webp" style="width:100%"></a>
                        <a ng-click="articleFunc('Piggy Gold')"><img src="/images/article/Piggy Gold/piggy-gold.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Phoenix Rises')"><img src="/images/article/Phoenix Rises/phonix.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Santas Gift')"><img src="/images/article/Santas Gift/santas-gift-rush.png" style="width:100%"></a>
                        <img src="/w3images/paris.jpg" style="width:100%">
                        <img src="/w3images/nature.jpg" style="width:100%">
                        <img src="/w3images/mist.jpg" style="width:100%">
                        <img src="/w3images/paris.jpg" style="width:100%">
                    </div>
                    <div class="column">
                        <a ng-click="articleFunc('Roma Plus')"><img src="/images/article/Roma Plus/Roma-plus-1.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Dragon Hatch')"><img src="/images/article/Dragon Hatch/dragon-hatch-min-1.png" style="width:100%"></a>
                        <a ng-click="articleFunc('jurssic kingdom')"><img src="/images/article/jurssic kingdom/Jurassic Kingdom.webp" style="width:100%"></a>
                        <a ng-click="articleFunc('Wild Bandito')"><img src="/images/article/Wild Bandito/wild-bandito.webp" style="width:100%"></a>
                        <a ng-click="articleFunc('Ganesha Gold')"><img src="/images/article/Ganesha Gold/ganesha-gold-min.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Muay Thai Champion')"><img src="/images/article/muay thai c/muay-thai-champion.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Shaolin Soccer')"><img src="/images/article/Shaolin Soccer/pg-slot-shaolin-soccer-game.png" style="width:100%"></a>
                        <img src="/w3images/wedding.jpg" style="width:100%">
                        <img src="/w3images/mountainskies.jpg" style="width:100%">
                        <img src="/w3images/rocks.jpg" style="width:100%">
                        <img src="/w3images/underwater.jpg" style="width:100%">
                    </div>  
                    <div class="column">
                        <a ng-click="articleFunc('qilin')"><img src="/images/article/ways of the qilin/Ways-of-the-Qilinlogo2-min.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Shiba Mogul')"><img src="/images/article/Shiba Mogul/Shiba-Mogul-PG-Slot-สล็อต-PG-สล็อต-AMBSlot.avif" style="width:100%"></a>
                        <a ng-click="articleFunc('Tree Of Fortune')"><img src="/images/article/Tree Of Fortune/Tree-Of-Fortune.webp" style="width:100%"></a>
                        <a ng-click="articleFunc('Win Win Won')"><img src="/images/article/win win won/win-win-won.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Hood vs Wolf')"><img src="/images/article/Hood vs Wolf/hood-wolf.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Genie's 3 Wishes')"><img src="/images/article/Genie's 3 Wishes/genies-wishes.webp" style="width:100%"></a>
                        <a ng-click="articleFunc('Reel Love')"><img src="/images/article/Reel Love/reel-love-1.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Legend of Hou Yi')"><img src="/images/article/Legend of Hou Yi/legend-of-hou-yi.png" style="width:100%"></a>
                        <img src="/w3images/falls2.jpg" style="width:100%">
                        <img src="/w3images/paris.jpg" style="width:100%">
                        <img src="/w3images/nature.jpg" style="width:100%">
                        <img src="/w3images/mist.jpg" style="width:100%">
                        <img src="/w3images/paris.jpg" style="width:100%">
                    </div>
                    <div class="column">
                        <a ng-click="articleFunc('egypt')"><img src="/images/article/egypt's book of mystery/ปก-Egypts-Book-of-Mystery.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Mahjong Ways')"><img src="/images/article/Mahjong Ways/mahjong-ways.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Galactic Gems')"><img src="/images/article/Galactic Gems/galactic-gems" style="width:100%"></a>
                        <a ng-click="articleFunc('Crypto Gold')"><img src="/images/article/Crypto Gold/crypto-gold" style="width:100%"></a>
                        <a ng-click="articleFunc('Majestic Treasures')"><img src="/images/article/Majestic Treasures/majestic-ts-min.png.webp" style="width:100%"></a>
                        <a ng-click="articleFunc('Plushie Frenzy')"><img src="/images/article/Plushie Frenzy/plushie-frenzy.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Mr. Hallow-Win')"><img src="/images/article/Mr. Hallow-Win/mr-hallow-win.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Flirting Scholar')"><img src="/images/article/Flirting Scholar/Flirting-Scholar.webp" style="width:100%"></a>
                        
                        <img src="/w3images/wedding.jpg" style="width:100%">
                        <img src="/w3images/mountainskies.jpg" style="width:100%">
                        <img src="/w3images/rocks.jpg" style="width:100%">
                        <img src="/w3images/underwater.jpg" style="width:100%">
                    </div>
                </div>
                    
                <div style="margin-bottom: 100px;">
                    <span style="font-size: 16px;color: white;">
                        487ATK ได้นำเกมสล็อตออนไลน์ใหม่ล่าสุดมามอบความสนุกให้ท่านถึงที่แล้ว รออะไรอยู่ล่ะ รีบๆ เข้าร่วมสนุกชิงโชค ลุ้นรางวัลกันแล้ว เล่นง่าย สะดวก ได้เงินจริง พร้อมที่จะสนุกไปกับพวกเราหรือยัง อย่ากลัวที่จะเดิมพันกับมัน รางวัลอันยิ่งใหญ่รอท่านอยู่ รางวัลทั้งหมด จะถูกจ่ายเป็นเงินสด สามารถสอบถามรายละเอียด เพิ่มเติม และแจ้งปัญหาต่าง ๆ ได้ตลอด 24 ชั่วโมง
                    </span>
                </div>
            </div>

@endsection