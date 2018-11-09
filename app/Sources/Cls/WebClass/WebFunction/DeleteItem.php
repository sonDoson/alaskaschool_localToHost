<?php
namespace App\Sources\Cls\WebClass\WebFunction;

use Illuminate\Support\Facades\DB;

class DeleteItem{

    public static function deleteItem($request){
        DB::table($request->table)->where('id', $request->id)->delete();
    }
    
}