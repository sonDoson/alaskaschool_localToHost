<?php
namespace App\Sources\Cls\WebClass\ContentData;

use App\Sources\Cls\WebClass\ContentData\ContentAbstract;
use Illuminate\Support\Facades\DB;

class ContentUserWelcome extends ContentAbstract{
    public function getDataContentWelcome(){
        $data = DB::table('categories')->orderBy('follow_id', 'asc')->get();
        $category_value = array();
        $category_mapping = array();
        $category_follow = array();
        foreach($data as $key => $value){
            $category_value[$value->id] = $value;
        }
        foreach($data as $key => $value){
            $category_follow[$value->follow_id][$value->id] = $value; 
        }
        // mapping
        foreach($data as $key => $value){
            if($value->follow_id == 0 && $value->start == 1){
                $category_mapping[$value->id] = array();
                
            }   else    {
                $category_mapping[$value->id] = $value->id;
            }
        }
    }
}