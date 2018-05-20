<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SaveSlideRequest;
use App\Models\Slides;
use App\Http\Controllers\Controller;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSlides()
    {
        return view('admin.slide.create_slide');
    }

    public function saveSlides(SaveSlideRequest $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        Slides::create([
            'name' => $request['title_slide'],
            'image' => $filename
        ]);
        return redirect()->route('list_slide');
    }

    public function showEditSlide($id)
    {
        $slide = Slides::find($id);
        return view('admin.slide.show_edit_slide', [
            'slide' => $slide
        ]);
    }

    public function editSlide(\Illuminate\Http\Request $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else {
            $news = Slides::where('id', $request['news_id'])->first();
            $filename = $news['image'];
        }

        $newsEdit = Slides::where('id', $request['news_id'])
            ->update([
                'name' => $request['title_slide'],
                'image' => $filename
            ]);
        if ($newsEdit) {
            \Session::flash('alert-success', 'Sửa Slide Thành Công');
        } else {
            \Session::flash('alert-warning', 'Sửa Slide Lỗi');
        }
        return redirect()->route('list_slide');
    }

    public function listSlides()
    {
        $slides = Slides::all();
        return view('admin.slide.list_slides', [
            'slides' => $slides
        ]);
    }

    public function deleteSlide($id)
    {
        $videos = Slides::find($id);
        $delete = $videos->delete();
        if ($delete) {
            \Session::flash('alert-success', 'Xoá Slide Thành Công');
        } else {
            \Session::flash('alert-warning', 'Xoá Slide Lỗi');
        }
        return redirect()->route('list_slide');
    }
}
