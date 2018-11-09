<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Web\WebDataUserPostsCategory;

class ControllerUserPostsCategory extends Controller
{
    public function getPostsCategory(){
        $layout = "WebUserCategory.css";
        $main = new WebDataUserPostsCategory;
        $name_class= $main->class_name;
        $data_nav = $main->navData();
        $data_content = Category::categoryGet("posts_category");
        return view('User.content.posts_category', compact('name_class', 'data_nav', 'data_content', 'layout'));
    }
    public function postPostsCategory(Request $request){
        $flag_back = Category::categoryAdd($request, "posts_category");
        if($flag_back == null){
            return redirect()->route('getPostsCategory')->with('message' , 'Thành công!');
        }   else    {
            return redirect()->route('getPostsCategory')->withErrors($flag_back);
        }
    }
}