<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CookTable;
use App\Models\Slides;

class CookTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cookTables = CookTable::all();
        return view('user.cook_table.index', [
            'cookTables' => $cookTables
        ]);
    }
}
