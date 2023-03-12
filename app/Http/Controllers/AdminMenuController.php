<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Menu;
use App\Http\Requests\StoreMenuRequest;
use Image;
use File;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::simplePaginate(10);
        return view('admin.menu.menu_index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.menu_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuRequest $request)
    {
        // เมื่อรับรูปมา
        // แยกชื่อออกมา
        $file_name = $request->file('image_url')->getClientOriginalName();
        // แยกนามสกุลออกมา
        $file_type = $request->file('image_url')->getClientOriginalExtension();
        // เอา tmp path ออกมา
        $file_tmp_path = $request->file('image_url');
        // ตั้งชื่อใหม่ออกมา โดยการเอาวันที่ไปอยู่หน้าไฟล์
        $file_new_name = date('H-i-s',time()).'_'.$file_name;

        // echo $request->name;
        // new object ขึ้นมา หรือ new ตารางขึ้นมาใหม่
        $menu = new Menu();
        // เรายิงไปที่คอลัมน์ name เอาสิ่งที่ส่งมา ใส่ลงไปในคอลัมน์ name ตาราง menus เหมือนเดิม
        $menu->name = $request->name;
        // คอลัมน์ image_url เอาสิ่งที่ส่งมา ก็คือไฟล์ new name ก็คือตัวนี้ที่เป็น new name เรียบร้อยแล้ว เอาออกมา 
        $menu->image_url = $file_new_name;
        $menu->detail = $request->detail;
        $menu->price = $request->price;
        $menu->save();

        // จัดการรูปภาพ
        $img = Image::make($file_tmp_path);
        $img->resize(946, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->crop(946,532);
        $img->save(public_path('/menu_images/'.$file_new_name));

        // menus พอมันไป map กับ route มันจะวิ่งไปที่ index พร้อมกับแนบ ok และก็แนบ msg ว่าบันทึกข้อมูลแล้วไป
        return redirect('/admin/menus')->with('ok','true')->with('msg','บันทึกข้อมูลเรียบร้อยแล้ว');
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
        $menu = Menu::find($id);
        return view('admin.menu.menu_edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMenuRequest $request, $id)
    {
        // จัดการเรื่อง file
        if($request->hasFile('image_url')){
            // ลบ file เก่าออก
            File::delete(public_path('/menu_images/'.$request->checkimage_url));
            // เริ่มแยกชื่อ นามสกุลใหม่อีกครั้ง
            $file_name = $request->file('image_url')->getClientOriginalName();
            $file_type = $request->file('image_url')->getClientOriginalExtension();
            $file_tmp_path = $request->file('image_url');
            $file_new_name = date('H-i-s',time()).'_'.$file_name;
        }else{
            $file_new_name = $request->checkimage_url;
        }
        // ดึงรูปจาก temp path มา resize แล้วย้ายเข้าไปเก็บใน image 
        $img = Image::make($file_tmp_path);
        $img->resize(946, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->crop(946, 532);
        $img->save(public_path('/menu_images/'.$file_new_name));

        $menu = Menu::find($id); // ดึงข้อมูลมาจาก Model staff มาเก็บใน $staff
        $menu->name = $request->name;
        $menu->image_url = $file_new_name;
        $menu->detail = $request->detail;
        $menu->price = $request->price;
        $menu->save();

        return redirect('/admin/menus')->with('ok','true')->with('msg','แก้ไขเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        File::delete(public_path('menu_images/'.$menu->image_url));
        $menu->delete();
        return redirect('/admin/menus')->with('ok','true')->with('msg','ลบข้อมูลเรียบร้อยแล้ว');
    }
}
