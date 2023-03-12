<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Auth;
use App\Cart;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::simplePaginate(6);
        return view('menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajaxStore(Request $request)
    {    //เช็คว่ามีการ Authen มาหรือยัง
        if(Auth::check()){ 
            // $menu_id =$request->menu_id; 
            //menu_id เป็นตัวแปรที่ตั้งไว่้ตั้งตอนเขียน Ajax ซึ่งมันคือ $request ที่เข้ามา และเอาไปค่าที่เข้ามาไปเก็บเอาไว้ใน $ menu_id
            // $menu = Menu::find($menu_id);
            // Authen id คือ
            // $user_id = Auth::id();
            // $menu_id = $menu->id; //คือค่า id จากตาราง menus
            // $menu_name = $menu->name;
            // $menu_price = $menu->price;

            //จะเอาข้อมูลใส่เข้าไปในตาราง Cart 
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->menu_id = $request->menu_id;// คือค่าที่เขาส่งมาจาก Ajax ซึ่งคือค่า $request
            $cart->status = 'preorder'; //ให้บันทึกลงตารางเป็น preorder
            $cart->save();

            return response()->json([
                                    'success'=>'เพิ่มเมนูลงตะกร้าเรียบร้อยแล้ว'
                                    // 'user_id'=>$user_id,
                                    // 'menu_id'=>$menu_id,
                                    // 'menu_name'=>$menu_name,
                                    // 'menu_price'=>$menu_price
                                    ]);
        }
    }
}
