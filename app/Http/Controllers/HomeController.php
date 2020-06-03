<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello()
    {
        return view('hi', ['name' => 'Toni']).' and from controller';
    }
}
