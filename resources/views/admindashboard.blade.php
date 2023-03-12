@extends('layouts.app')

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
@endsection

@section('title')
    admin dashboard
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
        h4 {
            font-weight: bold;
        }
        .card {
            background-image: url("{{ asset('images/wp3172691.jpg') }}");
            background-repeat: no-repeat;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! You are Admin.') }}
                    
                    <hr>
                    <div class="w-100 mt-5">
                        <div class="col-md-5 float-left">
                            <h4>ข้อมูลสมาชิก</h4>
                            <a href="{{ URL::to('/admin/users') }}"><img style="width:250px; height:180px;" class="w-100" src="{{ asset('images/membership.png') }}" alt="membership.png"></a>
                            <button class="btn btn-primary" id="userinfo">เพิ่ม ลบ แก้ไข ข้อมูล</button>
                        </div>
                        <div class="col-md-7 col-sm-12 mt-5 float-left">
                            <div class="card">
                                <a href="{{ URL::to('/admin/users') }}">
                                    <ul>
                                        <li>จำนวนแอดมิน ({{ $count_admin }})</li>
                                        <li>สมาชิกทั้งหมด ({{ $count_user }})</li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="w-100 mt-5">
                            <div class="col-md-5 float-left">
                                <h4>ข้อมูลเมนู</h4>
                                <a href="{{ URL::to('/admin/menus') }}"><img style="width:250px; height:180px;" class="w-100" src="{{ asset('images/menu.jpg') }}" alt="menu.jpg"></a>
                                <button class="btn btn-primary" id="menuinfo">เพิ่ม ลบ แก้ไข ข้อมูล</button>
                            </div>
                            <div class="col-md-7 col-sm-12 mt-5 float-left">
                                <div class="card">
                                    <a href="{{ URL::to('/admin/menus') }}">
                                        <ul>
                                            <li>เมนูทั้งหมด ({{ $count_menu }})</li>
                                            <li>เมนูมังสาวิรัติ ({{ $count_menu_vegetarian }})</li>
                                            <li>เมนูไก่ ({{ $count_menu_chicken }})</li>
                                            <li>เมนูไก่แบบดั้งเดิม ({{ $count_menu_traditional }})</li>
                                            <li>เมนูเนื้อวัว ({{ $count_menu_beef }})</li>
                                            <li>เมนูเนื้อวัว และ เนื้อแกะ ({{ $count_menu_beefnlamb }})</li>
                                            <li>เมนูไม่มีผัก ({{ $count_menu_noveggie }})</li>
                                            <li>เมนูรวมทุกอย่าง ({{ $count_menu_allmeat }})</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        <div class="clearfix"></div>

                        <div class="w-100 mt-5">
                            <div class="col-md-5 float-left">
                                <h4>ข้อมูลคำสั่งซื้อ</h4>
                            <a href="{{ URL::to('/admin/carts') }}"><img style="width:250px; height:180px;" class="w-100" src="{{ asset('images/order.png') }}" alt="order.png"></a>
                                <button class="btn btn-primary" id="cartinfo">เพิ่ม ลบ แก้ไข ข้อมูล</button>
                            </div>
                            <div class="col-md-7 col-sm-12 mt-5 float-left">
                                <div class="card">
                                    <a href="{{ URL::to('/admin/carts') }}">
                                        <ul>
                                            <li>คำสั่งซื้อทั้งหมด ({{ $count_cart }})</li>
                                            <li>คำสั้งซื้อที่เป็น Preorder ({{ $count_preorder }})</li>
                                            <li>คำสั้งซื้อที่เป็น Ordered ({{ $count_ordered }})</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(function(){
            $('#userinfo').click(function(){
                window.location.href = '/admin/users';
            });

            $('#menuinfo').click(function(){
                window.location.href = '/admin/menus';
            });

            $('#cartinfo').click(function(){
                window.location.href = '/admin/carts';
            });
        })
    </script>
@endsection
