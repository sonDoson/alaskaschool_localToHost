<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\PostsGetSingleItem;

class PostsGetSearchReturnItem{
    
    public static function postsGetSearchReturnItem($table_posts, $input){ 
        //get list id
        $en_posts = DB::table($table_posts)
                        ->where('name_en', 'like', '%' . $input . '%');
        $list_id = DB::table($table_posts)
                        ->where('name_vn', 'like', '%' . $input . '%')->union($en_posts)
                        ->orderBy('id', 'asc')->get();
        //get cate name
        $return = array();
        foreach($list_id as $id){
            $return[] = PostsGetSingleItem::postsGetSingleItem($table_posts, $id->id);
        }
        return $return;
    }
}