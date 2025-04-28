<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepository;
class UserController extends Controller
{
    public static function showuser()
    {
        return view('user');
    }
    public static function getalluser()
    {
        $userList = UserRepository::getallmembers();
        return view('dashbord/changepasswordbyAdmin', compact('userList'));
    }
    // public static function getalluser()
    // {
    //     $userList = UserRepository::getallmembers();
    //     return view('user', ['userList' => $userList]);
    // }

}
