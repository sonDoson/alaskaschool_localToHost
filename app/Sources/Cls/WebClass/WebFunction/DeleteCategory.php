<?php
namespace App\Sources\Cls\WebClass\WebFunction;

use Illuminate\Support\Facades\DB;
use App\Sources\Cls\WebClass\Func\Method\PostsDeleteItem;

class DeleteCategory{
    
    public static function deleteCategory($request){
        //get Item table
        $item_table = explode('_', $request->table);
        $item_table = $item_table[0] . "_posts";
        //delete item
        //get list item
        $list_item = DB($item_table)->where('id_category', $request->id)->get();
        foreach($list_item as $key => $value){
            PostsDeleteItem::postsGetSingleItem($item_table, $value->id);
        }
        //delete category
        DB::table($request->table)->where('id', $request->id)->delete();
    }
    
}