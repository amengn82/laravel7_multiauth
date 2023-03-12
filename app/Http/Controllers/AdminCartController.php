<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Cart;
use App\Http\Requests\StoreCartRequest;

class AdminCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::simplePaginate(10);
        return view('admin.cart.cart_index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cart.cart_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        $cart = new Cart(); // new ตาราง user 
        $cart->user_id = $request->user_id;
        $cart->menu_id = $request->menu_id;
        $cart->status = $request->status;
        $cart->save();

        return redirect('/admin/carts')->with('ok','true')->with('msg','บันทึกข้อมูลเรียบร้อยแล้ว');
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
        $cart = Cart::find($id);
        return view('admin.cart.cart_edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCartRequest $request, $id)
    {
        $cart = Cart::find($id);
        $cart->user_id = $request->user_id;
        $cart->menu_id = $request->menu_id;
        $cart->status = $request->status;
        $cart->save();

        return redirect('/admin/carts')->with('ok','true')->with('msg','แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/admin/carts')->with('ok','true')->with('msg','ลบข้อมูลเรียบร้อยแล้ว');
    }
}
