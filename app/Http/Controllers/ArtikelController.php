<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    Public function index(){
        return view('artikel');
    }
}

