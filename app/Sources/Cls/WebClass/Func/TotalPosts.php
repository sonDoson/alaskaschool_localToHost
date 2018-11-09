<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\Method\TotalPostsAdd;
use App\Sources\Cls\WebClass\Func\Method\TotalPostsGetTotal;

class TotalPosts{
    public static function totalPostsAdd($table_categories, $id_category, $index = 1){
        TotalPostsAdd::totalPostsAdd($table_categories, $id_category, $index);
    }
    public static function totalPostsAdd($table_categories, $id_category = null){
        $return = TotalPostsGetTotal::totalPostsAdd($table_categories, $id_category);
        return $return;
    }
}