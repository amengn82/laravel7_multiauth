@extends('layouts.app')

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
@endsection

@section('title')
    carts create
@endsection

@section('style')
    <style>
        h4 {
            padding: 20px;
            font-weight: bold;
        }
        /* create */
        .validate-error {
            height: 100px;
        }
        .validate-error ul li {
            color: red;
            font-weight: bold;
        }
        .form {
            text-align: center;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="validate-error">
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $value)
                      <li>{{ $value }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="form">
    <h4>แบบฟอร์มรายละเอียดคำสั่งซื้อ</h4>
    <hr>
    <br>
    {!! Form::open(['url'=>'/admin/carts','method'=>'POST']) !!}
        {{ Form::token() }}

        {{ Form::label('user_id','รหัสสมาชิก:') }}
        {{ Form::number('user_id', null, ['placeholder'=>'รหัสสมาชิก']) }}
        <br><br>
        
        {{ Form::label('status','สถานะคำสั่งซื้อ:') }}
        {{ Form::select('status', [
            'preorder'=>'Preorder',
        ],
        null,['placeholder'=>'เลือกสถานะคำสั่งซื้อ']) }}
        <br><br>

        {{ Form::label('menu_id','รหัสเมนู:') }}
        {{ Form::select('menu_id', [
            '1'=>'1-Carrot and mushroom gyros', 
            '2'=>'2-Chicken shawarma wrap', 
            '3'=>'3-Instant Pot Beef Gyro',
            '4'=>'4-Falafel & shawarma dejaj sandwich',
            '5'=>'5-Gyro night',
            '6'=>'6-Beef and lamb shawarma warps',
            '7'=>'7-Beef donair',
            '8'=>'8-Chicken donair',
            '9'=>'9-Falafel donair',
            '10'=>'10-Kids beef donair',
            '11'=>'11-Mixed donair',
            ],
            null,['placeholder'=>'เลือกรหัสเมนู']) }}
        <br><br>
        {{ Form::submit('บันทึก') }}

    {!! Form::close() !!}
    </div>
</div>
@endsection