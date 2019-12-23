<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menController extends Controller
{
    public function men()
    {
        return view('frontend.men.men');
    }
}
