<!DOCTYPE html>
<html lang=" {{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('head')
        <title>@yield('title','master')</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            body {
                background-image: url("{{ asset('images/17931367.jpg') }}");
                background-repeat: no-repeat;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            } 
            p {
            font-weight: bold;
            }
        </style>
        @yield('style')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">โฮมเพจ</a>
                    @else
                        <a href="{{ route('login') }}">เข้าสู่ระบบ</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">ลงทะเบียน</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div class="logo">
                    <a href="{{ URL::to('/') }}"><img src="{{ asset('images/roti_logo.png') }}" alt="roti_logo.png"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{ URL::to('/menu') }}">เมนู</a></li>
                        <li><a href="{{ URL::to('/video') }}">วีดีโอ</a></li>
                        <li><a href="{{ URL::to('/contactus') }}">ติดต่อเรา</a></li>
                    </ul>
                </nav>
                </div>
            @yield('content')

            <footer>
                <nav>
                    <a href="https://www.facebook.com/RotiWaala/"><img src="{{ asset('images/facebook_logo.png') }}" alt="facebook_logo.png"></a>
                    <a href="https://line.me/en/"><img src="{{ asset('images/line_logo.png') }}" alt="line_logo.png"></a>
                    <a href="https://www.instagram.com/accounts/emailsignup/"><img src="{{ asset('images/ig_logo.png') }}" alt="ig_logo.png"></a>
                    <div class="clearfix"></div>
                    <br>
                    <p><img style="width:30px; height:30px;" src="{{ asset('images/gmail.png') }}" alt="gmail.png">johnharryshop@gmail.com</p>
                    <p><img style="width:30px; height:30px;" src="{{ asset('images/address.png') }}" alt="address.png">500 พาลิเซดเซอร์ แอชวิลล์ นอร์ทแคโรไลนา 28803 สหรัฐอเมริกา</p>
                    <p>&copy; ลิขสิทธิ์ 2023 โดยโรตีลาวา ขอสงวนลิขสิทธิ์</p>
                </nav>
            </footer>
            @yield('script')
    </body>
</html>