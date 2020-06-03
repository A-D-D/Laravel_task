<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbTest extends Controller
{
    public function dbTest1()
    {
        $dbr=DB::select('select * from users');
        return $dbr;
    }
}
