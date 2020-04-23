<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerIndex extends Controller
{
      public function index()
    {
        return view('inicio');
    }
}
