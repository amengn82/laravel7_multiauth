<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'menu_id' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'กรุณากรอกรหัสผู้ใช้งาน',
            'menu_id.required' => 'กรุณาเลือกรหัสเมนู',
            'status.required' => 'กรุณาเลือกสถานะคำสั่งซื้อ'
        ];
    }
}
