<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsitekturController extends Controller
{
    public function index()
    {
        return view('pages.arsitektur');
    }
}
