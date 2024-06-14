<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThousandOperationController extends Controller
{
    public function index()
    {
        return view('pages.thousand');
    }
}
