@extends('layouts.app')

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
@endsection

@section('title')
    menus
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
        /* menu backend index */
        .pic-backend-index {
            width: 100px;
            border-radius: 4px;
        }
        /* column 2 */
        tbody tr td:nth-child(2){
            text-align: left;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <a class="add-user" href="{{ URL::to('/admin/menus/create') }}">
            <i class="fa-solid fa-plus"></i>
        </a>
        <h4>ข้อมูลรายชื่อเมนู</h4>
        <hr>
        <br>
        <table border=1>
            <thead>
                <tr>
                    <th>รหัสเมนู</th>
                    <th>ชื่อเมนู</th>
                    <th>รูปภาพ</th>
                    <th>รายละเอียด</th>
                    <th>ราคา</th>
                    <th>tools</th>
                </tr>
            </thead>
            <tbody>      
                @foreach ($menus as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td><img class="pic-backend-index" src="{{ asset('menu_images/'.$value->image_url) }}" alt="{{ $value->image_url }}"></td>
                        <td>{{ $value->detail }}</td>
                        <td>{{ $value->price }}</td>
                        <td>
                            <a href="{{ URL::to('admin/menus/'.$value->id.'/edit') }}">
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
            {{ $menus->links() }}
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
                window.location.href = '/admin/menus/'+ delete_id;
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