@extends('master')

@section('title')
    ฺvideo
@endsection

@section('style')
    
    <style>
    /* tabs news update*/
    h1 {
        text-align: center;
        text-decoration: underline;
    }
    ul {
        list-style-type: none;
    }
    a {
        text-decoration: none;
    }
    #tabs1,
    #tabs2,
    #tabs3,
    #tabs4 {
        width: 80%;
        margin: 0px auto;
    }
    .tabs-image {
        width: 33.33%;
        float: left;
        box-sizing: border-box;
        padding: 10px;
    }
    p {
        font-weight: bold;
    }
    </style>
@endsection

@section('content')
<div class='container'>
    <div class='clear'></div>
    <h1>ขนมปังแฟลตเบรดที่ทำได้ง่ายและรวดเร็วด้วยแป้ง!</h1>
    <section class="content">
        <div class="content-img">
            <img src="{{ asset('images/roti_video.jpeg') }}" alt="roti_video.jpeg">
        </div>
        <div class="content-info">
            <h1>เรียนรู้วิธีทำอาหารจานโปรดของคุณ</h1>
            <p>ลองเรียนรู้วิธีทำโรตีแสนอร่อยที่คุณเองก็ทำได้ในวันหยุดสุดสัปดาห์กับครอบครัวดูสิ!</p>
        </div>
        <div class="clear"></div>
    </section>
    <section class='news-update'>
        <article class='clip'>
            <div id='tabs1'>
                <div class='tabs-image'>
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/0DrCrdFcmhU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p>Chicken Roti Wrap Recipe By SooperChef
                    </p>
                </div>
                <div class='tabs-image'>
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-tXCcJ9xCPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p>Chicken Paratha Roll with Dynamite Sauce By SooperChef</p>
                </div>
                <div class='tabs-image'>
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/pNJxTX9nquo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p>Zinger Paratha Roll Recipe By SooperChef</p>
                </div>
                <div class='clear'></div>
            </div>
            <div id='tabs2'>
                <div class='tabs-image'>
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Ra1zFWwPP1w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p>Tandoori Tikka Boti Paratha Roll Recipe | Paratha Roll | SooperChef</p>
                </div>
                <div class='tabs-image'>
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/oTvpsZOeGRQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p>Kabab Paratha Roll | Chapli Kabab Roll Recipe By SooperChef</p>
                </div>
                <div class='tabs-image'>
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/DPzYEhVYXR8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p>Omelette Keema Roll Recipe | Egg Paratha Roll | SooperChef</p>
                </div>
                <div class='clear'></div>
            </div>
        </article>
    </section>
</div>
@endsection