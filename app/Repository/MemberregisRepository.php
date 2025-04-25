<?php
namespace App\Repository;

use App\Models\Memberinput;
use App\Models\Memberregis;

class MemberregisRepository{
    public static function checkIn($firstName,$lastName,$room,$staff_code){
      $memberInput = new Memberinput();
      $memberInput->firstName = $firstName;
      $memberInput->lastName = $lastName;
      $memberInput->room = $room;
      $memberInput->memberId = $staff_code;

      return $memberInput;
    }
}


?>