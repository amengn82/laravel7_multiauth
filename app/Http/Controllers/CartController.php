<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Cart;

class CartController extends Controller
{
    //ต้อง login ก่อน ถึงจะยอมให้กดไปในตะกร้าได้ ถ้ามีใครรเข้ามาต้องให้ตรวจสอบที่ middleware ก่อนแล้วให้ Authen ด้วย
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {   //user_id ส่งมาด้วยชื่อตัวแปรอะไรก็แล้วแต่จะถูกส่งมากับลิ้งค์ด้วยชื่อ id ซึ่งก็คือ $id 
        $order = DB::table('carts')
                    ->where('user_id',$id)
                    ->where('status', 'preorder')
                    ->leftjoin('menus','carts.menu_id','=','menus.id')
                    ->select('carts.id as cart_no','menus.id','menus.name','menus.price')
                    ->get();
        return view('cart.show',compact('order'));
    }

    public function destroy(Request $request)
    {
        $order = Cart::find($request->input('cart_no'));
        if($order->delete())
        {
            return response()->json([
                'success'=>'ยกเลิกเมนูนี้เรียบร้อยแล้ว',
                ]);
        }
    }

    public function pdf()
    {
        $user_id = Auth::id();
        $orders = DB::table('carts')
                    ->where('user_id', $user_id)
                    ->where('status','preorder')
                    ->leftjoin('menus','carts.menu_id','=','menus.id')
                    ->leftjoin('users','carts.user_id','=','users.id')
                    ->select('menus.id','menus.name','menus.price','users.name as fullname')
                    ->get();

        $pdf_output = view('cart.pdf', compact('orders'))->render(); //หน้า view ทั้งหมดจะเป็น pdf
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($pdf_output);
        $mpdf->Output('po.pdf','I');

        $cart = Cart::where('user_id',$user_id)
                    ->where('status','preorder')
                    ->get();

        foreach ($cart as $value) {
            $value->status = 'ordered';
            $value->save();
        }

        return $resp->withHeader("Content-type","application/pdf");
        $request->session()->forget('user_id');
    }
}
