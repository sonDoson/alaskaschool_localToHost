<?php
namespace App\Sources\Cls\WebClass\WebFunction;

use Illuminate\Support\Facades\DB;

class ChangeNameCategory{

    public static function changeNameCategory($id, $table){
        DB::table($table)->where('id', $id)->delete();
    }
    
}