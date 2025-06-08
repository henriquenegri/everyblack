<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagInicialController extends Controller
{
    public function index()
    {
        return view('app.pagInicial');
    }
}