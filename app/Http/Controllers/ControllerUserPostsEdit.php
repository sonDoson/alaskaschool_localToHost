<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Web\WebDataUser;
use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Method\PostsGetSingleItem;
use App\Sources\Cls\WebClass\Func\Method\PostsImagesAdd;
use App\Sources\Cls\WebClass\Func\Method\PostsAddStress;
use Illuminate\Support\Facades\Storage;
use DB;

class ControllerUserPostsEdit extends Controller
{
    public function getPostsEdit(Request $request){
        $layout = "WebUserPost.css";
        $main = new WebDataUser;
        $name_class = $main->class_name;
        $data_nav = $main->navData();
        
        $data = PostsGetSingleItem::postsGetSingleItem($request->table_posts, $request->id);

        $data_category = Category::categoryGet('posts_category');
        return view('user.content.posts_posts_edit', compact('layout', 'name_class', 'data_nav', 'data_category', 'data'));
    }
    public function postPostsEdit(Request $request){
        $flag = 0;
        $db_posts = DB::table('posts_posts')->where('id', $request->id_posts)->first();
        //edit posts
        if($request->category !== null){
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['id_category' => $request->category]);
        }
        if($request->name['en'] !== null){
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['name_en' => $request->name['en']]);
        }
        if($request->name['vn'] !== null){
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['name_vn' => $request->name['vn']]);
        }
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['value_en' => $request->value['en']]);
            DB::table('posts_posts')->where('id', $request->id_posts)->update(['value_vn' => $request->value['vn']]);
        //edit image

        if($request->hasFile('images')){
            //delete old image
            $db_old_images = DB::table('posts_posts_images')->where('id_posts', $request->id_posts)->get();
            $paths = array();
            foreach($db_old_images as $key => $value){
                unlink( public_path($value->image_path));
            }
            DB::table('posts_posts_images')->where('id_posts', $request->id_posts)->delete();
            //add new image
            PostsImagesAdd::postsImagesAdd($request, "posts_posts", $request->id_posts);
        }
        //edit stress
        if($request->stress == true){
            PostsAddStress::postsAddStress('posts_posts', $db_posts->id_category, $request->id_posts);
        }   else    {
            DB::table('posts_posts_stress')->where('id_posts', $request->id_posts)->delete();
        }
        //return
        if($flag == 0){
            return redirect()->route('getPostsList')->withErrors('Cập nhật thành công! Bài viết số ' . $request->id_posts);
        }   else    {
            return redirect()->route('getPostsList')->withErrors('Không thành công! vui lòng thử lại');
        }
    }
}
