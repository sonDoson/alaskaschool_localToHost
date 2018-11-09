<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostsDeleteItem{
    public static function postsGetSingleItem($table_posts, $id_posts){
        //list images
        $item_images = DB::table($table_posts . '_images')->where('id_posts', $id_posts)->get();
        //delete image
        //unlink images
        foreach($item_images as $key => $value){
            unlink( public_path($value->image_path));
        }
        //del image
        DB::table($table_posts . '_images')->where('id_posts', $id_posts)->delete();
        //delete stress
        $stress = DB::table($table_posts . '_stress')->where('id_posts', $id_posts)->get();
        if(!empty($stress)){
            DB::table($table_posts . '_stress')->where('id_posts', $id_posts)->delete();
        }
        //edit couter
        $table_category_name = substr_replace($table_posts, 'category', -5);
        $id_category = DB::table($table_posts)->where('id', $id_posts)->first();
        $id_category = $id_category->id_category;
        $couter = DB::table('total_posts')->where('table_name', $table_category_name)->where('id_category', $id_category)->first();
        $couter = $couter->num_posts;
        $couter = (int)$couter - 1;
        DB::table('total_posts')->where('table_name', $table_category_name)->where('id_category', $id_category)->update(['num_posts' => $couter]);
        //delete item
        Db::table($table_posts)->where('id', $id_posts)->delete();
        return null;
    }
}