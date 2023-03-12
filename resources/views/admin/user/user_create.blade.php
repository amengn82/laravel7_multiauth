@extends('layouts.app')

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
@endsection

@section('title')
    users create
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
    <h4>แบบฟอร์มรายละเอียดสมาชิก</h4>
    <hr>
    <br>
    {!! Form::open(['url'=>'/admin/users/','method'=>'POST']) !!}
        {{ Form::token() }}

        {{ Form::label('name','ชื่อ-นามสกุล') }}<br>
        {{ Form::text('name', null, ['placeholder'=>'ชื่อ-นามสกุล','autofocus']) }}<br>
        <br><br>
        {{ Form::label('email','อีเมล') }}<br>
        {{ Form::email('email', null, ['placeholder'=>'รหัสผ่าน']) }}<br>
        <br><br>
        {{ Form::label('password','รหัสผ่าน') }}<br>
        {{ Form::password('password', null) }}<br>
        <br><br>
        {{ Form::submit('บันทึก') }}

    {!! Form::close() !!}
    </div>
</div>
@endsection