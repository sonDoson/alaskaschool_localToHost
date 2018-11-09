<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PostsImagesAdd{
    
    public static function postsImagesAdd($request, $table, $id_posts, $good_files = 0){
        //if($good_files == 0){
        //$validator = Validator::make($request->file('images'), 
        //    [
        //        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //    ],
        //    [
        //        'images.*.required' => 'Vui lòng cập nhật ảnh',
        //        'images.*.mimes' => 'Ảnh không đúng định dạng',
        //        'images.*.max' => 'Ảnh quá lớn',
        //    ]);
        //    if($validator->fails()) {
        //        return $validator;
        //    }
        //}
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach($images as $key => $image){
                //name
                $name = $id_posts . '_' . $key . '.' . $image->getClientOriginalExtension();
                
                //path
                $path = '/uploads/images/' . $table;
                $destinationPath = public_path($path);
                $image->move($destinationPath, $name);
                
                //Store database
                $table_images = $table . '_images';
                $image_path = $path . '/' . $name;
                DB::table($table_images)->insert(
                    ['id_posts' => $id_posts, 'image_name' => $name, 'image_path' => $image_path]
                );
            }
        }
    }
}