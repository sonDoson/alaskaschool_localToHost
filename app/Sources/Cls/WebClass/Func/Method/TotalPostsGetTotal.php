<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TotalPostsGetTotal{
    public static function totalPostsAdd($table_categories, $id_category = null){
        if($id_category == null){
            $data = DB::table('total_posts')->get();
            $num_posts = 0;
            foreach($data as $key => $value){
                $num_posts += $value->num_posts;
            }
            return $num_posts;
        }   else    {
            $data = DB::table('total_posts')->where('id_category', $id_category)->first();
            $num_posts = $data->num_posts;
            return $num_posts;
        }
    }
}