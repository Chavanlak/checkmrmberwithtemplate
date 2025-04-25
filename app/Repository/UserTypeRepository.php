<?php

namespace App\Repository;
use App\Models\UserType;
use Illuminate\Support\Facades\Auth;

class UserTypeRepository{
    public static function getallUserType(){
       return UserType::get();
    }
}
?>