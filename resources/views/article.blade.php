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
                        <img src="/w3images/paris.jpg" style="width:100%">
                        <img src="/w3images/nature.jpg" style="width:100%">
                        <img src="/w3images/mist.jpg" style="width:100%">
                        <img src="/w3images/paris.jpg" style="width:100%">
                    </div>
                    <div class="column">
                        <a ng-click="articleFunc('Roma Plus')"><img src="/images/article/Roma Plus/Roma-plus-1.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Dragon Hatch')"><img src="/images/article/Dragon Hatch/dragon-hatch-min-1.png" style="width:100%"></a>
                        <img src="/w3images/wedding.jpg" style="width:100%">
                        <img src="/w3images/mountainskies.jpg" style="width:100%">
                        <img src="/w3images/rocks.jpg" style="width:100%">
                        <img src="/w3images/underwater.jpg" style="width:100%">
                    </div>  
                    <div class="column">
                        <a ng-click="articleFunc('qilin')"><img src="/images/article/ways of the qilin/Ways-of-the-Qilinlogo2-min.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Shiba Mogul')"><img src="/images/article/Shiba Mogul/Shiba-Mogul-PG-Slot-สล็อต-PG-สล็อต-AMBSlot.avif" style="width:100%"></a>
                        <img src="/w3images/falls2.jpg" style="width:100%">
                        <img src="/w3images/paris.jpg" style="width:100%">
                        <img src="/w3images/nature.jpg" style="width:100%">
                        <img src="/w3images/mist.jpg" style="width:100%">
                        <img src="/w3images/paris.jpg" style="width:100%">
                    </div>
                    <div class="column">
                        <a ng-click="articleFunc('egypt')"><img src="/images/article/egypt's book of mystery/ปก-Egypts-Book-of-Mystery.png" style="width:100%"></a>
                        <a ng-click="articleFunc('Mahjong Ways')"><img src="/images/article/Mahjong Ways/mahjong-ways.png" style="width:100%"></a>
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