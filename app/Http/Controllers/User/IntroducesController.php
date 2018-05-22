<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CookTable;
use App\Models\Introduces;
use App\Models\News;
use App\Models\Slides;

class IntroducesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $introduces = Introduces::first();
        return view('user.introduces.index', [
            'introduces' => $introduces
        ]);
    }
}
