<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class CategoryGet{
    public static function categoryGet($category_name){
        $data = DB::table($category_name)->get();
        $return = array();
        foreach($data as $key => $value){
            $return[$value->id]['name_en'] = $value->name_en;
            $return[$value->id]['name_vn'] = $value->name_vn;
            $return[$value->id]['created_at'] = $value->created_at;
        }
        return $return;
    }
}
?>