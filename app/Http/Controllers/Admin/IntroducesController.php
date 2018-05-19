<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SaveHotelRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveIntroducesRequest;
use App\Models\Introduces;

class IntroducesController extends Controller
{
    public function index()
    {
        $introduces = Introduces::first();
        return view('admin.introduces.index', [
            'introduces' => $introduces
        ]);
    }

    public function saveIntroduces(SaveIntroducesRequest $request)
    {
        if (!empty($request['id'])) {
            $hotelEdit = Introduces::where('id', $request['id'])
                ->update([
                    'content' => $request['content']
                ]);
            if ($hotelEdit) {
                \Session::flash('alert-success', 'Sửa Giới Thiệu Thành Công');
            } else {
                \Session::flash('alert-warning', 'Sửa Giới Thiệu Lỗi');
            }
        } else {
            $newsCompany = Introduces::create([
                'content' => $request['content']
            ]);
            if ($newsCompany) {
                \Session::flash('alert-success', 'Tạo Giới Thiệu Thành Công');
            } else {
                \Session::flash('alert-warning', 'Tạo Giới Thiệu Lỗi');
            }
        }

        return redirect()->route('introduces');
    }
}
