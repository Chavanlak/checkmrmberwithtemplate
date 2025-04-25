<?php
namespace App\Repository;
use App\Models\Memberinput;
use App\Models\Memberregis;

class MemberinputRepository{
    public static function findMemberById($MemberID){
        $memdata = Memberregis::select(['MemberID','MemName_T', 'MemLastName_T'])->where('MemberId','=',$MemberID)->first();
        return $memdata;
    }
}
?>