<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuRequest extends FormRequest
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
            'name' => 'required|max:100',
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png',
            'detail' => 'required|max:255',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'กรุณากรอกชื่อเมนู',
            'fname.max' => 'จำนวนตัวอักษรต้องไม่เกิน 100',
            'image_url.image' => 'ต้องเป็นไฟล์รูปภาพ',
            'image_url.mimes' => 'รองรับไฟล์ภาพที่มีนามสกุล jpeg jpg png เท่านั้น',
            'price.required' => 'กรุณาระบุราคาอาหาร',
        ];
    }
}
