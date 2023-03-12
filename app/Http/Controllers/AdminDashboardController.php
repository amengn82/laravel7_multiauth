<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Menu;
use App\Cart;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function dashboard()
    {
        $user = User::all();
        $menu = Menu::all();
        $cart = Cart::all();

        $count_admin = $user->where('is_admin','=','1')->count();
        $count_user = $user->where('is_admin','=','0')->count();
        $count_menu = $menu->count();
        $count_menu_vegetarian = $menu->where('detail','=','Vegan')->count();
        $count_menu_chicken = $menu->where('detail','=','Chicken')->count();
        $count_menu_traditional = $menu->where('detail','=','Traditional chicken gyro')->count();
        $count_menu_beef = $menu->where('detail','=','Beef')->count();
        $count_menu_beefnlamb = $menu->where('detail','=','Beef and lamb')->count();
        $count_menu_noveggie = $menu->where('detail','=','No veggie toppings')->count();
        $count_menu_allmeat = $menu->where('detail','=','All meat and all toppings')->count();
        
        $count_cart = $cart->count();
        $count_preorder = $cart->where('status','=','preorder')->count();
        $count_ordered = $cart->where('status','=','ordered')->count();

        return view('admindashboard',compact(
                                        'count_admin',
                                        'count_user',
                                        'count_menu',
                                        'count_menu_vegetarian',
                                        'count_menu_chicken',
                                        'count_menu_traditional',
                                        'count_menu_beef',
                                        'count_menu_beefnlamb',
                                        'count_menu_noveggie',
                                        'count_menu_allmeat',
                                        'count_cart',
                                        'count_preorder',
                                        'count_ordered',
                                        ));
    }
}