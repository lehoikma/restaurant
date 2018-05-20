<?php

namespace App\Http\Controllers\User;

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
        return view('user.top.index');
    }
}
