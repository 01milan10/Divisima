<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function pages()
    {
        return view('frontend.pages.pages');
    }
}
