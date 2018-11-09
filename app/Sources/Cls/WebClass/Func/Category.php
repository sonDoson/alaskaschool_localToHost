<?php
namespace App\Sources\Cls\WebClass\Func;

use App\Sources\Cls\WebClass\Func\Method\CategoryAdd;
use App\Sources\Cls\WebClass\Func\Method\CategoryGet;
use App\Sources\Cls\WebClass\Func\Method\CategoryUpdate;

class Category{
    public static function categoryGet($category_name){
        $return = CategoryGet::categoryGet($category_name);
        return $return;
    }
    public static function categoryAdd($request, $table){
        $return = CategoryAdd::categoryAdd($request, $table);
        return $return;
    }
    public static function categoryUpdate($request){
        $return = CategoryUpdate::categoryUpdate($request);
        return $return;
    }
}