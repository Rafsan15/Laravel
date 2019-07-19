<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        return "Hello";
    }
    public function profile($id=0)
    {
        return $id;
    }
    public function edit($id=0)
    {
        return "Edited id is =". $id;
    }
    public function home()
    {
        return view('first');
    }
}
