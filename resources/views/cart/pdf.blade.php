<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase Order</title>
    <style>
        body,html {
            font-family: Garuda;
        }
        .container h1 {
            text-align: center;
        }
        .header {
            width: 60%;
            margin: 0px auto;
        }
        table {
            width: 60%;
            border-collapse: collapse; 
            margin: 0px auto;
            text-align: center
        }
        th, td {
            border: 1px solid black;
        }
        .remark{
            width: 60%;
            margin: 0px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>ใบสั่งซื้อ</h1>
            <h1>Purchase Order</h1>
            <div class="header">
                <div class="customer-detail">
                    <p>Customer : {{ $orders[0]->fullname }}</p>
                    <p>Date : {{ Carbon\Carbon::now() }}</p>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Menu name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total=0; @endphp
                    @foreach ($orders as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->price }}</td>
                        </tr>
                    @php $total += $value->price @endphp    
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">จำนวนเงินรวม</td>
                        <td>{{ $total }}</td>
                    </tr>
                </tfoot>
            </table>
            <div class="remark">
                <h3>remark :</h3>
                <ul>
                    <li>ทุกรายการสั่งซื้อเป็น Pick up order โปรดมารับอาหารภายในเวลาทำการ 9.00น.-20.00น.</li>
                    <li>โปรดชำระเงินผ่านทางธนาคาร UOB: 123-456-789</li>
                    <li>โปรดแนบเอกสารการชำระเงินพร้อมใบสั่งซื้อส่งมาที่ email: johnharryshop@gmail.com</li>
                    <li>เนื่องจากมาตราการป้องกันโรค Covid19 ทางร้านขออภัยในความไม่สะดวก</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>