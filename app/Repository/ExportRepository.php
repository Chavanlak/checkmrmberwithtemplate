<?php
namespace App\Repository;
use App\Models\Export;
use App\Models\Memberinput;

class ExportRepository{
    public static function exportExcel(){
        $dataList = Memberinput::select(['IdMember','firstName', 'lastName','room','datetime'])->get();
        // $result = [];
        // $questionHeaders = [];

        // foreach($dataList as $row){
        //     $Memeber = $row->MemberID;

        //     if(!isset($result[$Memeber])) {
        //         $result[$Memeber] = [
        //             'MemberID' => $row->MemberID,
        //             'MemName_T' => $row->MemName_T,
        //             'MemLastName_T' => $row->MemLastName_T,
        //         ];
        //     }

        //     // $questionHeaders[] = 'MemberID';
        //     // $result[$Memeber]['MemberID'] = $row->MemberID;
           
        // }
     $newData = array();
     $firstLine = true;

     foreach($dataList as $dataRow){
        if($firstLine){
            $newData[] = array_keys($dataRow->toArray());
            $firstLine = false;
            
        }
        $newData[] = array_values($dataRow->toArray());
     }
        return $newData;
    }
}
?>