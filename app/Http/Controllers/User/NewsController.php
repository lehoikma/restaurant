<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CookTable;
use App\Models\News;
use App\Models\Slides;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $news = News::all();
        return view('user.news.index', [
            'news' => $news
        ]);
    }

    public function detail($name, $id) {
        $news = News::find($id);
        $follow = News::inRandomOrder()->take(3)->get();
        return view('user.news.detail', [
            'news' => $news,
            'follow' => $follow
        ]);
    }
}
