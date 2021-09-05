@extends('layouts.app')

@section('content')
<style>
    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="u-clearfix u-custom-html u-custom-html-1 ">
                <iframe src="https://www.lottery.co.th/numbers" width="100%" height="410" frameborder="0"></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <iframe src="https://www.lottery.co.th/10lotto" frameborder="0" style="overflow-y: scroll;overflow: hidden;width: 100%;height: 315;"></iframe>
        </div>

        <div class="col-lg-12 col-md-12 text-center">
            <h1 style="margin-top: 50px;"><span>ลอตเตอร์รี่ Online</span></h1>
        </div>
        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_5terre.jpg">
                <img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_forest.jpg">
                <img src="img_forest.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_lights.jpg">
                <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_mountains.jpg">
                <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_5terre.jpg">
                <img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_forest.jpg">
                <img src="img_forest.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_lights.jpg">
                <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_mountains.jpg">
                <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="col-lg-12 col-md-12 text-center">
            <h1 style="margin-top: 50px;"><span>ข่าวสาร News</span></h1>
        </div>
        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_5terre.jpg">
                <img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_forest.jpg">
                <img src="img_forest.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_lights.jpg">
                <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_mountains.jpg">
                <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_5terre.jpg">
                <img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_forest.jpg">
                <img src="img_forest.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_lights.jpg">
                <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery col-lg-3 col-md-6 text-center">
            <a target="_blank" href="img_mountains.jpg">
                <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>
</div>
@endsection