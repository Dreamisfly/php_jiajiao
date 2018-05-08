<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AindexController extends Controller
{
    //
    public function index()
    {
        return view('Admin.index');
    }
}
