<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jewelryController extends Controller
{
    public function jewelry()
    {
        return view('frontend.jewelry.jewelry');
    }
}
