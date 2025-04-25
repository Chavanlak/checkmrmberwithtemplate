<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberinputController extends Controller
{
    public static function searchMember(){
        return view('searchMember');
    }
}
