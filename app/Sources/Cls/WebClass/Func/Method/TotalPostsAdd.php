<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TotalPostsAdd{
    public static function totalPostsAdd($table_categories, $id_category, $index = 1){
        $num_posts_old = DB::table('total_posts')
                         ->where('table_name', $table_categories)
                         ->where('id_category', $id_category)
                         ->select('num_posts')
                         ->first();
        $num_posts = $num_posts_old->num_posts + $index;
        
        DB::table('total_posts')
        ->where('table_name', $table_categories)
        ->where('id_category', $id_category)
        ->update(
            [
                'num_posts' => $num_posts,
                'updated_at'    => Carbon::now('Asia/Ho_Chi_Minh'),
            ]
        );
    }
}