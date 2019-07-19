<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function home()
    {
        return view('AdminHome');
    }
    public function profile($id=0)
    {
        return $id;
    }
    public function edit($id=0)
    {
        return "Edited id is =".$id;
    }
    public function delete($id=0)
    {
        return "Delete Successfully. Id is =".$id;
    }
}
