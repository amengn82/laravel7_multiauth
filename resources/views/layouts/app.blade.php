<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Roti Wala')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap">
  
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vender/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vender/toastr/build/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vender/confirm/css/notify.css') }}">

        <style>
            body,html {
            margin: 0px;
            padding: 0px;
            font-family: 'Mitr', sans-serif;
            background-image: url("{{ asset('images/hand-painted.jpg') }}");
            background-repeat: no-repeat;
        }
        .container {
            width: 80%;
            margin: 0px auto;
        }
        table {
            margin: 0px auto;
            width: 100%;
            position: relative;
        }
        table, tr, th, td {
            border: 1px solid lightgray;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }

        thead tr th {
            background-color: green;
            color: white;
            position: sticky;
        }
        tbody tr td {
            text-align: center;
        }
        /* paginate */
        .container header {
            text-align: center;
        }
        .container header * {
            display: inline;
            padding: 3px;
        }
        nav {
            background-image: url("{{ asset('images/unsplash.jpg') }}");
            background-repeat: no-repeat;
        }
        </style>
    @yield('style')

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('vender/fontawesome/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('vender/toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('vender/confirm/js/notify.js') }}"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="@yield('url_toplogo','/')">
                    <img style="width:150px;" src="{{ asset('images/roti_logo.png') }}" alt="roti_logo.png">
                    Roti Wala serve the best for you
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('ลงทะเบียน') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            @yield('cart')
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @if (session('msg'))
        @if (session('ok'))
            <script>
                toastr.success('{{ session("msg") }}')
            </script>    
        @else
            <script>
                toastr.error('{{ session("msg") }}')
            </script>
        @endif     
    @endif
    @yield('script')
</body>
</html>