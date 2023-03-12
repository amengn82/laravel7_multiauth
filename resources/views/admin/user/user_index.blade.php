@extends('layouts.app')

@section('url_toplogo')
    {{ url('/admin/dashboard') }}
@endsection

@section('title')
    users
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
        /* column 2 */
        tbody tr td:nth-child(2) {
            text-align: left;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <a class="add-user" href="{{ URL::to('/admin/users/create') }}">
            <i class="fa-solid fa-user-plus"></i>
        </a>
        <h4>ข้อมูลรายชื่อสมาชิก</h4>
        <hr>
        <br>
        <table border=1>
            <thead>
                <tr>
                    <th>รหัสสมาชิก</th>
                    <th>ชื่อ</th>
                    <th>อีเมล์</th>
                    <th>สถานะการเป็นแอดมิน</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>tools</th>
                </tr>
            </thead>
            <tbody>      
                @foreach ($users as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->is_admin }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>  
                        <td>
                            <a href="{{ URL::to('admin/users/'.$value->id.'/edit') }}">
                                <i class="fa-solid fa-user-pen"></i>
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
            {{ $users->links() }}
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
                window.location.href = '/admin/users/'+ delete_id;
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