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
</head>
<body style="background-image: url('/images/maxresdefault.jpg'); height: 100%;background-attachment:fixed;">
    <div id="app">
        <div class="container">
            <div class="bg">
                <div class="container">
                    <nav class="navigation navbar-expand-md  navbar-dark ">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route($navbars[0]->route) }}">{{ $navbars[0]->name }}</a>
                                    <!-- <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route($navbars[1]->route) }}">{{ $navbars[1]->name }}</a>
                                    <!-- <a class="nav-link" href="#about">About </a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route($navbars[2]->route) }}">{{ $navbars[2]->name }}</a>
                                    <!-- <a class="nav-link" href="#yoga"> Yoga</a> -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route($navbars[3]->route) }}">{{ $navbars[3]->name }}</a>
                                    <!-- <a class="nav-link" href="#pricing">Pricing</a> -->
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route($navbars[4]->route) }}">{{ $navbars[4]->name }}</a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="{{ route($navbars[5]->route) }}">{{ $navbars[5]->name }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="{{ route($navbars[5]->route) }}">{{ $navbars[6]->name }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="{{ route($navbars[5]->route) }}">{{ $navbars[7]->name }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="{{ route($navbars[5]->route) }}">{{ $navbars[8]->name }}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- <nav class="navigation navbar-expand-md navbar-dark">
                <div class="collapse navbar-collapse" style="background-color: ''; text-align: center;" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($navbars[0]->route) }}">{{ $navbars[0]->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($navbars[1]->route) }}">{{ $navbars[1]->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($navbars[2]->route) }}">{{ $navbars[2]->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($navbars[3]->route) }}">{{ $navbars[3]->name }}</a>
                            </li>
                        
                        @foreach ($navbars as $navbarItem)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav> -->
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
            @yield('content')
        </main>
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