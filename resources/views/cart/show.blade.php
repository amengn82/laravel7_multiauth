@extends('layouts.app')

@section('title')
    order
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4 style="text-align: center">รายการสินค้าที่สั่งซื้อ</h4>
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>รหัสเมนู</th>
                            <th>รายการสินค้า</th>
                            <th>ราคา</th>
                            <th>ยกเลิก</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach ($order as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->price }}</td>
                            <td>
                                <button class="cancel btn btn-danger" cart_no="{{ $value->cart_no }}">ยกเลิก</button>
                            </td>
                        </tr> 
                        @php $total += $value->price @endphp
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">ยอดชำระเงินรวม</th>
                            <th style="text-decoration-line:underline;text-decoration-style:double;">
                                {{ $total }}
                            </th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                <button id="ordered" class="btn btn-success">ตกลงสั่งซื้อสินค้า</button>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function(){
            $('#ordered').click(function(){
                window.location.href = '/cart/pdf';
            });

            $(".cancel").click(function(){
                var cart_no = $(this).attr('cart_no');
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type:'GET',
                    url:'/cart/cancel',
                    data:{cart_no:cart_no, _token:token},
                    success:function(data){
                        if(data.success){
                            alert(data.success);
                            location.reload();           
                        }else{
                            window.location.href = '/home'
                        }
                    }
                });
            });
        })
    </script>
@endsection