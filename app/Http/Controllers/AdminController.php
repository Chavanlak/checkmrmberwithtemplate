<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function adminPage()
    {
        return view('admindashbord');
    }

}
