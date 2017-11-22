<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $test = DB::table('products')->get();
        dd($test);

        //return view('welcome');
    }
}
