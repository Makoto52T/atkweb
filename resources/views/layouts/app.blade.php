<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>487ATK เว็บเกมออนไลน์ ตลอด 24 ชั่วโมง</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/6cc6845347.js"></script>
    <!-- <style>
        body {
            font-family: 'thai_sans_literegular';
        }
    </style> -->
</head>

<body style="background-image: url('/images/maxresdefault.jpg'); height: 100%;background-attachment:fixed;">
    <div id="app">

        <!-- <div class="row">
            <div class="col-lg-1 col-md-1" style="background-color: white;">0000</div>
            <div class="col-lg-1 col-md-1" style="background-color: red;">1111</div>
            <div class="col-lg-1 col-md-1" style="background-color: gray;">2222</div>
            <div class="col-lg-1 col-md-1" style="background-color: green;">3333</div>
            <div class="col-lg-1 col-md-1" style="background-color: yellow;">4444</div>
            <div class="col-lg-1 col-md-1" style="background-color: blue;">5555</div>
            <div class="col-lg-1 col-md-1" style="background-color: purple;">6666</div>
            <div class="col-lg-1 col-md-1" style="background-color: pink;">7777</div>
            <div class="col-lg-1 col-md-1" style="background-color: peru;">8888</div>
            <div class="col-lg-1 col-md-1" style="background-color: salmon;">9999</div>
            <div class="col-lg-1 col-md-1" style="background-color: sienna;">1111</div>
            <div class="col-lg-1 col-md-1" style="background-color: silver;">2222</div>
        </div> -->
        <div class="container text-center">
            <img src="/images/new.png">
        </div>
        <div class="container bg">
            <nav class="navigation navbar-expand-md  navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active" style="margin-left: 50px;">
                            <a class="nav-link" href="{{route($navbars[0]->route)}}">
                                <div class="h1span"><span style="font-size: 30px;">{{$navbars[0]->name}}</span></div></a>
                            <!-- <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://sport.autoplay.cloud/?prefix=QlRU" target="_blank"><span style="font-size: 30px;">{{ $navbars[1]->name }}</span></a>
                            <!-- <a class="nav-link" href="#about">About </a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route($navbars[2]->route) }}"><span style="font-size: 30px;">{{ $navbars[2]->name }}</span></a>
                            <!-- <a class="nav-link" href="#yoga"> Yoga</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route($navbars[3]->route) }}"><span style="font-size: 30px;">{{ $navbars[3]->name }}</span></a>
                            <!-- <a class="nav-link" href="#pricing">Pricing</a> -->
                        </li>
                        <li class="nav-item dropdown">
<<<<<<< HEAD
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route($navbars[4]->route) }}"><span style="font-size: 30px;">{{ $navbars[4]->name }}</span></a>
=======
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $navbars[4]->name }}</a>
>>>>>>> 47395b8cd01fe8451c15b9e5c3abd23da16b29e6
                            <ul class="dropdown-menu dropdown-menu-end bg" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route($navbars[5]->route) }}"><span style="font-size: 30px;">{{ $navbars[5]->name }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route($navbars[6]->route) }}"><span style="font-size: 30px;">{{ $navbars[6]->name }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route($navbars[7]->route) }}"><span style="font-size: 30px;">{{ $navbars[7]->name }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route($navbars[8]->route) }}"><span style="font-size: 30px;">{{ $navbars[8]->name }}</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- <div class="container">
            <nav class="navigation navbar-expand-md  navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" style="background-color: ''; text-align: center;" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Link รับทรัพย์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="article">บทความ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">ติดต่อเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#online">Game Online</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> -->

        <main class="py-4">
            <div class="container" style="background-image: url('/images/bg-blur.jpg'); background-attachment:fixed;">

                @yield('content')
            </div>
        </main>
        <div class="container text-center" style="margin-bottom: 20px;">
            <img src="/images/agent-logo.png">
        </div>
        <footer class="text-muted">
            <div class="container text-center" style="margin-bottom: 80px;">
                <div class="footer-text" style="margin-bottom: 30px;">
                    <p class="">487ATK <a href="home">คาสิโนออนไลน์</a> สล็อตออนไลน์ เกมส์ยิงปลา เดิมพันกีฬา ครบวงจรที่นี่ที่เดียว
                        สูตรบาคาร่า เทคนิคการเล่นบาคาร่า สเต็ปสด แทงบอลไม่มีขั้นต่ำ สูตรสล็อตฟรี สล็อตออนไลน์ฟรีเครดิตแจกฟรี ป๊อกเด้งออนไลน์ ป๊อกเด้งออนไลน์ ฟรีเครดิต
                        เว็บเดียวจบครบทุกการเดิมพัน 487ATK ที่นี่ที่เดียวสามารถเดิมพัน คาสิโนออนไลน์ บาคาร่า สล็อต ยิงปลา กีฬา ได้ครบ ไม่ต้องโยกเงินให้เสียเวลาอีกต่อไป <a href="home">เล่นสล็อตออนไลน์</a> ยิงปลา บนมือถือได้เงินจริง ไม่ต้องโหลดแอพ<br>487ATK เรามุ่งมั่นและมีความตั้งใจในการพัฒนาอย่างต่อเนื่องเพื่อให้ลูกค้าทุกท่านเพลิดเพลินไปกับการเดิมพันออนไลน์
                        บริการอย่างรวดเร็ว ปลอดภัย</p>
                </div>
                <div class="footer-copyright">
                    <p>CopyRight &copy; 2021, 487ATK</p>
                </div>
            </div>
        </footer>

        <a class="dropdown-item" href="{{ route($navbars[5]->route) }}">{{ $navbars[5]->name }}</a>
        <nav class="fixnav-bar">
            <div class="container">
                <ul class="fixnav">
                    <li class="fixnav-item hvr-pulse-grow">
                        <a class="fixnav-link" href="{{route($navbars[0]->route)}}"><i class="fa fa-home"></i><span>{{$navbars[0]->name}}</span></a>
                        <!-- <a href="promotions.html" class="fixnav-link"><i class="fa fa-gift"></i> <span>โปรโมชั่น</span></a> -->
                    </li>
                    <li class="fixnav-item hvr-pulse-grow">
                        <a class="fixnav-link" href="{{route($navbars[2]->route)}}"><i class="fa fa-gamepad"></i><span>{{$navbars[2]->name}}</span></a>
                        <!-- <a href="demo.html" class="fixnav-link"><i class="far fa-play"></i> <span>ทดลอง</span></a> -->
                    </li>
                    <li class="fixnav-item middle-item hvr-bounce-in">
                        <a href="https://sport.autoplay.cloud/?prefix=QlRU" target="_blank" class="fixnav-link active" aria-current="page"><i class="fa fa-play-circle"></i> <span>เข้าเล่น</span></a>
                    </li>
                    <li class="fixnav-item hvr-pulse-grow">
                        <a href="affiliate.html" class="fixnav-link"><i class="fa fa-users"></i> <span>ชวนเพื่อน</span></a>
                    </li>
                    <li class="fixnav-item hvr-pulse-grow">
                        <a href="{{ route($navbars[3]->route) }}" class="fixnav-link"><i class="fa fa-comments"></i> <span>ติดต่อ</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/jquery-3.0.0.min.js"></script>


    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>