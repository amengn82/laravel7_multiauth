@extends('layouts.app')

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
@endsection

@section('title')
    carts
@endsection

@section('style')
    <style>
        /* create button */
        .container > a {
            font-size: 25px;
        }
        /* table title */
        h4 {
            text-align: center;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <a class="add-user" href="{{ URL::to('/admin/carts/create') }}">
            <i class="fa-solid fa-cart-plus"></i>
        </a>
        <h4>ข้อมูลคำสั่งซื้อ</h4>
        <hr>
        <br>
        <table border=1>
            <thead>
                <tr>
                    <th>รหัสตะกร้า</th>
                    <th>รหัสสมาชิก</th>
                    <th>รหัสเมนู</th>
                    <th>สถานะคำสั่งซื้อ</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>tools</th>
                </tr>
            </thead>
            <tbody>      
                @foreach ($carts as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->menu_id }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td>
                            <a href="{{ URL::to('admin/carts/'.$value->id.'/edit') }}">
                                <i class="fa-solid fa-file-pen"></i>
                            </a>
                            <a href="#" class="delete" delete-id="{{ $value->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>      
                        </td>  
                    </tr> 
                @endforeach
            </tbody>
        </table>
        <br>
        <header>
            {{ $carts->links() }}
        </header>
        <br>
        <button id="mainmenu" class="btn btn-success">กลับสู่หน้าหลัก</button>
    </div>
@endsection

@section('script')
    <script>
        $(function(){
            $('.delete').click(function(){
        var delete_id = $(this).attr('delete-id');
        Notify.confirm({
            title : 'Confirm title',
            html : '<b>Are you sure?</b>',
            ok : function(){
                // Notify.suc('OK');
                window.location.href = '/admin/carts/'+ delete_id;
            },
            cancel : function(){
                // Notify.alert('cancel');
            }
        });
    });

            $('#mainmenu').click(function(){
                window.location.href = '/admin/dashboard';
            });
        })
    </script>
@endsection