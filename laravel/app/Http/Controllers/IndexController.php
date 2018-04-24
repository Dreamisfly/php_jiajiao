<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class IndexController extends Controller
{
    public function index()
    {
        return view('Index.index');
    }
}
