<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AzkaController extends Controller
{
    public function index()
    {
        return view('AZKA.index');
    }
    public function index_next()
    {
        return view('AZKA.index_next');
    }
    
}
