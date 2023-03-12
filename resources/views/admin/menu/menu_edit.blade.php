@extends('layouts.app')

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
@endsection

@section('title')
    menus edit
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
        /* form */
        .form {
            text-align: center;
        }
        /* menu backend index */
        .pic-backend-index {
            width: 100px;
            border-radius: 4px;
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
    <h4>แบบฟอร์มรายละเอียดเมนู</h4>
    <hr>
    <br>
    {!! Form::model($menu, ['method'=>'POST','files'=>true]) !!}
    {{ Form::token() }}

        {{ Form::label('name','ชื่อเมนู') }}<br>
        {{ Form::text('name', null, ['placeholder'=>'ชื่อเมนู','autofocus']) }}<br>
        <br><br>
        {{ Form::label('image_url', 'รูปภาพ') }}<br>
        {{ Form::file('image_url') }}<br>
        {{ Form::hidden('checkimage_url', $menu->image_url) }}
        <br>
        <img class="pic-backend-index" src="{{ asset('menu_images/'.$menu->image_url) }}" alt="{{ $menu->image_url }}">
        <br>
        <p>{{ $menu->image_url }}</p>
        <br><br>
        {{ Form::label('detail','รายละเอียด') }}<br>
        {{ Form::text('detail', null, ['placeholder'=>'รายละเอียดเมนู']) }}<br>
        <br><br>
        {{ Form::label('price','ราคา') }}<br>
        {{ Form::number('price', null, ['placeholder'=>'ราคาเมนู']) }}<br>
        <br><br>
        {{ Form::submit('บันทึก') }}

    {!! Form::close() !!}
    </div>
</div>
@endsection