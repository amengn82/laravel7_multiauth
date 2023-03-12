@extends('master')

@section('title')
    contact us
@endsection

@section('style')
    <style>
        section address {
            text-align: center;
        }
        .map {
            margin: 0 auto;
            width: 50%;
        }
        .map iframe {
            width: 100%;
        }
        p {
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <section class="content">
        <div class="content-img">
            <img src="{{ asset('images/worktime.png') }}" alt="worktime.png">
        </div>
        <div class="content-info">
            <h1>เปิดทำการทุกวัน</h1>
            <p>เปิดทำการทุกวันตั้งแต่วันจันทร์ ถึง วันอาทิตย์ ตั้งแต่เวลา 9.00น. ถึง 20.00น. ทุกคำสั่งซื้อบนเว็บไซต์เป็น Pick up order กรุณามารับอาหารของคุณภายในเวลาทำการ</p>
        </div>
        <div class="clear"></div>
    </section>
    <section>
        <address>
            <p>500 พาลิเซดเซอร์<br>
            แอชวิลล์ นอร์ทแคโรไลนา 28803 สหรัฐอเมริกา</p>
            <p>โทร: 1-2345-67890</p>
            <p>อีเมล: johnharryshop@gmail.com</p>
        </address>
    </section>
    <section>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.1013572168727!2d-82.51969869999999!3d35.5017719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8859ed78946a6b4f%3A0x30d2c5f9eaf5f58a!2s500%20Palisades%20Cir%2C%20Asheville%2C%20NC%2028803!5e0!3m2!1sen!2sus!4v1654282201421!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</div>

@endsection