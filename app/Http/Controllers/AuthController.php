<?php

namespace App\Http\Controllers;
use App\Repository;
use App\Models\User;
use App\Repository\UserRepository;
use App\Repository\UserTypeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public static function register(){
        $userType = UserTypeRepository::getallUserType();
        return view('register', compact('userType'));
    }
   
    public static function registerPost(Request $request){
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $department = $request->department;
        $phone = $request->phone;

        UserRepository::save(
            $firstname,
            $lastname,
            $username,
            $email,
            $password,
            $department,
            $phone
        );
        // return redirect('/register')->with('ลงทะเบียนสำเร็จ');
        return redirect()->route('register')->with('success', 'ลงทะเบียนสำเร็จ!');
    }

    public static function login(){
        // return view('login');
        return view('login');
    }


    public static function loginError(){
        return "Error some";
    }
    public static function authMain(){
        return "login is Avaliable";
    }
    public static function loginPost(Request $request){
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/showreport')->with('success', 'Login successful.');
            // return redirect('/recipe')->with('success', 'Login successful.');
        }

        return redirect('/loginerror')->with('error', 'Invalid credentials.');

    }  
    public static function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'Logout successful.');
    }

}
