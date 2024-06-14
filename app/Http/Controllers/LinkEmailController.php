<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkEmailController extends Controller
{
    public function index()
    {
        return view('pages.link');
    }
}
