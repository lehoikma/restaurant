<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveSlideRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'fileToUpload' => 'required | mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'fileToUpload.required' => 'Vui lòng chọn hình ảnh đại diện cho tin tức ',
            'fileToUpload.mimes' => 'Vui lòng chọn hình lại định dạng file ảnh',
        ];

    }

}

