<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveProductsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'title_products' => 'required',
            'fileToUpload' => 'required | mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'title_products.required' => 'Vui lòng nhập tên món ăn ',
            'fileToUpload.required' => 'Vui lòng chọn hình ảnh đại diện cho món ăn',
            'fileToUpload.mimes' => 'Vui lòng chọn hình lại định dạng file ảnh',
        ];

    }

}

