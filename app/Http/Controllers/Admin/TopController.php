<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.top.index');
    }
}
