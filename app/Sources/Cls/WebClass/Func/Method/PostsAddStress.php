<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PostsAddStress{
    public static function postsAddStress($table, $id_category, $id_posts){
        DB::table($table . '_stress')->insert(['id_category' => $id_category, 'id_posts' => $id_posts]);
    }
}