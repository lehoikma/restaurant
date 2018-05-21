<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CookTable;
use App\Models\Slides;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slides::all();
        $cookTables = CookTable::take(6)->get();
        return view('user.top.index', [
            'slides' => $slides,
            'cookTables' => $cookTables
        ]);
    }
}
