@extends('layouts.app')

@section('content')
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
        padding: 20px;
        font-family: Arial;
    }

    /* Center website */
    .main {
        max-width: 1000px;
        margin: auto;
    }

    h1 {
        font-size: 50px;
        word-break: break-all;
    }

    .row {
        margin: 8px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row>.column {
        padding: 8px;
    }

    /* Create four equal columns that floats next to each other */
    .column {
        float: left;
        width: 25%;
    }

    /* Clear floats after rows */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Content */
    .content {
        background-color: white;
        padding: 10px;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 900px) {
        .column {
            width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="text-center">
            <h1>ฟุตบอล</h1>
            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/ball-online_.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/football-online-1024x864.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/footballclub.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/unnamed (1).jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/ss.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/เทคนิคแทงบอลออนไลน์.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/แทงบอล-ผ่านเว็บไซต์.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/football/new/unnamed.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h1>บาคาร่า</h1>
            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="lights.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="nature.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="lights.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="nature.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h1>สล็อต</h1>
            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="lights.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="nature.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="lights.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="nature.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h1>ไฮโล</h1>
            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="lights.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="nature.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="lights.jpg" alt="Lights" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="nature.jpg" alt="Nature" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>My Work</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h1>หวย</h1>
            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/4สิ่งที่ควรรู้ก่อนตัดสินใจเล่นหวยออนไลน์.jpg" alt="Mountains" style="width:100%">
                        <h3>4สิ่งที่ควรรู้ก่อนตัดสินใจเล่นหวยออนไลน์</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/ใช้เหรียญคริปโตซื้อหวยออนไลน์-300x188.jpg" alt="Lights" style="width:100%">
                        <h3>ใช้เหรียญคริปโตซื้อหวยออนไลน์</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/ใช้เหรียญ-Ripple-ซื้อหวยออนไลน์.jpg" alt="Nature" style="width:100%">
                        <h3>ใช้เหรียญ Ripple ซื้อหวยออนไลน์</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/โปรแกรมวิเคราะห์หวย-300x214.jpg" alt="Mountains" style="width:100%">
                        <h3>โปรแกรมวิเคราะห์หวย</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/แนะนำแอพฯ-Telegram-สำหรับคนที่ชอบเล่นหวยออนไลน์.jpg" alt="Mountains" style="width:100%">
                        <h3>แนะนำแอพฯ Telegram สำหรับคนที่ชอบเล่นหวยออนไลน์</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/แทงหวยออนไลน์ด้วยเหรียญ-Binance.jpg" alt="Lights" style="width:100%">
                        <h3>แทงหวยออนไลน์ด้วยเหรียญ Binance</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/เว็บไซต์แทงหวย.jpg" alt="Nature" style="width:100%">
                        <h3>เว็บไซต์แทงหวย</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="/images/game/lottery/new/เล็งจ่ายค่าหวยด้วยเหรียญZOON-300x187.jpg" alt="Mountains" style="width:100%">
                        <h3>เล็งจ่ายค่าหวยด้วยเหรียญZOON</h3>
                        <p>Lorem ipsum..</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
@endsection