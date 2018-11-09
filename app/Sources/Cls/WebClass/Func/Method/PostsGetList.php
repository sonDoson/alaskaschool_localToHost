<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\CategoryGet;

class PostsGetList{
    
    public static function postsGetList($table_posts, $cate = null, $input = null){ 
        $data_return = array();
        if($cate == null && $input == null){
            $db_posts = DB::table($table_posts)->orderBy('id', 'desc')->take(10)->get();
        }   else    { //searching
            if($input == null){
                if($cate == 0){
                    $db_posts = DB::table($table_posts)->orderBy('id', 'desc')->take(10)->get();
                }   else    {
                    $db_posts = DB::table($table_posts)->where('id_category', $cate)->orderBy('id', 'desc')->take(10)->get();
                }
            }   else    {
                if($cate == 0){
                    $en_posts = DB::table($table_posts)
                                    ->where('name_en', 'like', '%' . $input . '%');
                    $db_posts = DB::table($table_posts)
                                    ->where('name_vn', 'like', '%' . $input . '%')->union($en_posts)
                                    ->orderBy('id', 'desc')->take(10)->get();
                }   else    {
                    $en_posts = DB::table($table_posts)->where('id_category', $cate)
                                    ->where('name_en', 'like', '%' . $input . '%');
                    $db_posts = DB::table($table_posts)
                                    ->where('name_vn', 'like', '%' . $input . '%')->union($en_posts)
                                    ->orderBy('id', 'desc')->take(10)->get();
                }
            }   
        }
        
        //get category
        $category = CategoryGet::categoryGet(substr_replace($table_posts,"category",'-5'));
        //making array
        foreach($db_posts as $key => $value){
            $data_return[$key]['id'] = $value->id;
            $data_return[$key]['category'] = $category[$value->id_category]['name_vn'];
            $data_return[$key]['name_en'] = $value->name_en;
            $data_return[$key]['name_vn'] = $value->name_vn;
            $data_return[$key]['value_en'] = $value->value_en;
            $data_return[$key]['value_vn'] = $value->value_vn;
            $data_return[$key]['time'] = $value->created_at;
        }
        return [$category, $data_return];
    }
}