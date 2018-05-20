<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditNewsRequest;
use App\Http\Requests\SaveNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNews()
    {
        return view('admin.news.form_news');
    }

    public function saveNews(SaveNewsRequest $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        $saveNews = News::create([
            'content' => $request['content_news'],
            'image' => $filename,
            'title' => $request['title_news']
        ]);
        if ($saveNews) {
            \Session::flash('alert-success', 'Tạo Tin Tức Thành Công');
        } else {
            \Session::flash('alert-warning', 'Tạo Tin Tức Lỗi');
        }
        return redirect()->route('list_news');
    }

    public function listNews()
    {
        $news = News::all();
        return view('admin.news.list_news',[
            'news' => $news
        ]);
    }

    public function showEditNews($id)
    {
        $news = News::find($id);

        if (isset($news) && !empty($news)) {
            return view('admin.news.edit_news', [
                'news' => $news
            ]);
        }
        return redirect()->route('list_news');
    }

    public function editNews(EditNewsRequest $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else{
            $news = News::where('id', $request['news_id'])->first();
            $filename = $news['image'];
        }

        $newsEdit = News::where('id', $request['news_id'])
            ->update([
                'content' => $request['content_news'],
                'image' => $filename,
                'title' => $request['title_news']
            ]);
        if ($newsEdit) {
            \Session::flash('alert-success', 'Sửa Tin Tức Thành Công');
        } else {
            \Session::flash('alert-warning', 'Sửa Tin Tức Lỗi');
        }
        return redirect()->route('list_news');

    }

    public function deleteNews($id)
    {
        $news = News::find($id);
        $delete = $news->delete();
        if ($delete) {
            \Session::flash('alert-success', 'Xoá Tin Tức Thành Công');
        } else {
            \Session::flash('alert-warning', 'Xoá Tin Tức Lỗi');
        }
        return redirect()->route('list_news');
    }
}
