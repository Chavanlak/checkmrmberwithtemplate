<?php
namespace App\Repository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRepository{
    public static function save($firstname,$lastname,$username,$email,$password,$department,$phone){
        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);
        // $user->password =$password;
        $user->department = $department;
       $user->phone = $phone;
        return $user->save();

    }
}
?>