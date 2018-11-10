<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;

class PostsGetSingleItem{
    public static function postsGetSingleItem($table_posts, $id_posts){ 
        //get data
        $data_posts = DB::table($table_posts)->where('id', $id_posts)->first();
        //get category
        $data_category = DB::table(substr_replace($table_posts, 'category', -5))->where('id', $data_posts->id_category)->first();
        //get image
        $images = DB::table($table_posts . '_images')->where('id_posts', $id_posts)->get();
        foreach($images as $key => $value){
            $image[] = $value->image_path;
        }
        //check stress
        $stress = DB::table($table_posts . '_stress')->where('id_posts', $id_posts)->first();
        if(!empty($stress->id_posts)){
            $stress = true;
        }   else    {
            $stress = false;
        }
        //time
        $M = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Sept', 'Oct', 'Nov', 'Dec'];
        $date = explode(" ",$data_posts->created_at);
        $date = explode("-",$date[0]);
        $date_format['string'] = $date[2] . ' ' . $M[(int)$date[1] - 1] . ' ' . $date[0];
        $date_format[0] = $date[2];
        $date_format[1] = $M[(int)$date[1] - 1];
        $date_format[2] = $date[0];
        
        //return
        $return = array();
        $return['id'] = $data_posts->id;
        $return['id_category'] = $data_category->id;
        $return['category_en'] = $data_category->name_en;
        $return['category_vn'] = $data_category->name_vn;
        $return['name_en'] = $data_posts->name_en;
        $return['name_vn'] = $data_posts->name_vn;
        $return['value_en'] = $data_posts->value_en;
        $return['value_vn'] = $data_posts->value_vn;
        $return['created_at'] = $date_format;
        $return['images'] = $image;
        $return['stress'] = $stress;
        return $return;
    }
}