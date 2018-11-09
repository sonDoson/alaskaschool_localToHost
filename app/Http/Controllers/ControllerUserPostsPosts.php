<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Web\WebDataUser;
use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Posts;

class ControllerUserPostsPosts extends Controller
{
    public function getPostsPosts(){
        $layout = "WebUserPost.css";
        $main = new WebDataUser;
        $name_class = $main->class_name;
        $data_nav = $main->navData();
        $data_category = Category::categoryGet('posts_category');
        return view('User.content.posts_posts', compact('layout', 'name_class', 'data_nav', 'data_category'));
    }
    public function postPostsPosts(Request $request){
        $flag_back = Posts::postsAdd($request, 'posts_posts', 1);
        if($flag_back == null){
            return redirect()->route('getPostsList');
        }   else    {
            return redirect()->route('postPostsPosts')->withErrors($flag_back);
        }
    }
}
