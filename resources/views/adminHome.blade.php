@extends('layouts.app')

@section('title')
    Admin Roti Wala
@endsection

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
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

                    {{ __('คุณเข้าสู่ระบบแล้ว! คุณเป็นผู้ดูแลระบบ') }}
                    <a href="{{ URL::to('/admin/dashboard') }}"><i class="fa-solid fa-computer-mouse"></i>คลิกเพื่อเข้าสู่หน้าหลัก</a>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

