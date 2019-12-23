<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class womenController extends Controller
{
    public function women()
    {
        return view('frontend.women.women');
    }
}
