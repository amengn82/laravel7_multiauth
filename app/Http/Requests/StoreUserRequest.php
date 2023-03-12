<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //ถ้าไม่ได้ login เข้ามาจะใช้งานไม่ได้
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',         
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'กรุณากรอกชื่อ-นามสกุล',
            'name.max' => 'จำนวนตัวอักษรต้องไม่เกิน 100 ตัวอักษร',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.unique' => 'อีเมลนี้ถูกใช้งานแล้ว',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
            'password.min' => 'จำนวนรหัสผ่านอย่างน้อย 8 ตัวอักษร',         
        ];
    }
}
