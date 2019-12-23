<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogsController extends Controller
{
    public function blogs(){
        return view('frontend.blogs.blogs');
    }
}
