<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use App\Sources\Cls\WebClass\Func\Method\PostsGetSingleItem;

class PostsGetStress{
    public static function postsGetStress($table){
        $list_id = DB::table($table . '_stress')->get();
        $return = array();
        foreach($list_id as $key => $value){
            $return[$value->id_posts] = PostsGetSingleItem::postsGetSingleItem($table, $value->id_posts);
        }
        return $return;
    }
}