<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {

        return view('contact');

        
    }
    public function index1()
    {

        return view('band');

        
    }
    public function index11()
    {

        return view('tour');

        
    }
}
