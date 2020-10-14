<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomplekController extends Controller
{
    public function index()
    {
        return view('pages.komplek');
    }
}
