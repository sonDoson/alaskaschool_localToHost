<?php
namespace App\Sources\Cls\WebClass\WebFunction;

use Illuminate\Support\Facades\DB;

class AjaxLoadMore{
    
    public function postAjaxUserLoadMore($table, $column, $soft, $index){
        $elements = 10;
        $skip = 0 * $elements;
        
        
        $table_sub = explode("_", $table);
        $table_category = $table_sub[0] . "_category";
        
        $db_category = DB::table($table_category)->get();
        $category = array();
        foreach($db_category as $key => $value){
            $category[$value->id]['en'] = $value->name_en;
            $category[$value->id]['vn'] = $value->name_vn;
        }
        //return gettype( $column );
        if($column == null){
            $db = DB::table($table)->skip($skip)->take(10)->get();
        }   else    {
            $db = DB::table($table)->orderBy($column, $soft)->skip($skip)->take(10)->get();
        }
        
        $return = array();
        foreach($db as $key => $value){
            $return[$key]['id'] = $value->id;
            $return[$key]['category_en'] = $category[$value->id_category]['en'];
            $return[$key]['category_vn'] = $category[$value->id_category]['vn'];
            $return[$key]['name_en'] = $value->name_en;
            $return[$key]['name_vn'] = $value->name_vn;
            $return[$key]['value_en'] = $value->value_en;
            $return[$key]['value_vn'] = $value->value_vn;
            $return[$key]['time'] = $value->created_at;
        }
        return $return;
    }
    
}