@extends('layouts.app')

@section('title')
    menus
@endsection

@section('style')
    <style>
        .card-body {
            background-image: url("{{ asset('images/watercolor.jpg') }}");
            background-repeat: no-repeat;
        }
        .card-header {
            font-weight: bold;
            background-color: black;
            color: white;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เมนูโรตี</div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ dd($menus) }} --}}
                    @foreach ($menus as $value)
                        <div class="w-100 mt-5">
                            <div class="col-md-5 float-left">
                                <img style="width:280px; height:225px; border-radius:5%;" class=w-100" src="{{ asset('menu_images/'.$value['image_url']) }}" 
                                alt="{{ $value['image_url'] }}">
                            </div>
                            <div class="col-md-7 col-sm-12 float-left">
                                <ul>
                                    <li class="name">{{ $value['name'] }}</li>
                                    <li class="detail">{{ $value['detail'] }}</li>
                                    <li class="price">{{ $value['price'] }} Baht</li>
                                    <button class="order btn btn-primary mt-5" data-id="{{ $value['id'] }}">สั่งซื้อ</button>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <header>
                {{ $menus->links() }}
            </header>
        </div>
    </div>
</div>
@endsection

@section('cart')
    @guest
        
    @else
    <a href="{{ URL::to('cart/show/'.Auth::id()) }}">
        <span style="background-color:black; padding:10px; border-radius:50%; color:white;">
            &nbsp;{{ App\Cart::where('user_id',Auth::id())
                        ->where('status','preorder')
                        ->count()}}
        </span>
        <img style="width:75px;" src="{{ asset('images/cart.png') }}" alt="cart.png">
    </a>
    @endguest
@endsection

@section('script')
    <script>
        $(function(){
            $(".order").click(function(){
                var menu_id = $(this).attr('data-id');
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type:'POST',
                    url:'/menu',
                    data:{menu_id:menu_id, _token:token},
                    success:function(data){
                        if(data.success){
                            alert(data.success);
                            // alert(data.user_id);
                            location.reload();           
                        }else{
                            window.location.href = '/home'
                        }
                    }
                });
            });
        });
    </script>
@endsection