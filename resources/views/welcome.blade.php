@extends('master')

@section('title')
    ฺRoti Wala
@endsection

@section('content')
    <section class="content">
        <div class="content-img">
            <img src="{{ asset('images/roti_toping.jpg') }}" alt="roti_toping.jpg">
        </div>
        <div class="content-info">
            <h1>ทำความรู้จักเรา</h1>
            <p>โรตีของเรามีท็อปปิ้งมากถึง 10 อย่าง 
                ราคาเริ่มต้นเพียงชิ้นละ 10 บาทเท่านั้น
                มีเมนูที่หลากหลาย มากกว่า 100 รายการ</p>
        </div>
        <div class="clear"></div>
    </section>
    <h1>ข่าวสารและกิจกรรม</h1>
    <section class="news">
        <div class="news-inner">
            <img src="{{ asset('images/roti1.jpg') }}" alt="roti1.jpg">
            <p>เร็วๆนี้ เตรียมพบกันที่สาขา มัลดีฟส์ นะคะ</p>
        </div>
        <div class="news-inner">
            <img src="{{ asset('images/roti2.png') }}" alt="roti2.png">
            <p>เตรียมพบกับรสชาติใหม่ โรตีไส้เป็ดปักกิ่ง</p>
        </div>
        <div class="news-inner">
            <img src="{{ asset('images/roti3.jpg') }}" alt="roti3.jpg">
            <p>ประสบความสำเร็จกับสาขาที่มากถึง 1000 สาขา</p>
        </div>
        <div class="clear"></div>
    </section>
@endsection