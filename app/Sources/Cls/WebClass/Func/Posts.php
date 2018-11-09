<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\Method\PostsAdd;
use App\Sources\Cls\WebClass\Func\Method\PostsGetList;

class Posts{
    public static function postsAdd($request, $table, $images){
        $return = PostsAdd::postsAdd($request, $table, $images);
        return $return;
    }
    public static function postsGetList($table_posts, $cate = null, $input = null){
        $return = PostsGetList::postsGetList($table_posts, $cate, $input);
        return $return;
    }
}