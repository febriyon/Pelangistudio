<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    public function index()
    {
        return view('pages.real_estate');
    }
}
