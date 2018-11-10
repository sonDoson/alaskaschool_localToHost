<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Web\WebDataUser;
use App\Sources\Cls\WebClass\Func\Posts;
use App\Sources\Cls\WebClass\Func\Method\TotalPostsGetTotal;

class ControllerUserPostsList extends Controller
{
    public function getPostsList(){
        $layout = "WebUserList.css";
        $function = "list/PageMode.css";
        $main = new WebDataUser;
        $name_class = $main->class_name;
        $data_nav = $main->navData();
        
        $data = Posts::postsGetList('posts_posts');
        $form_option = $data[0];
        $data_content = $data[1];
        //total_posts
        $total_posts = TotalPostsGetTotal::totalPostsAdd('posts_category');
        $total_page = $total_posts/10;
        $total_page = ceil($total_page);
        if($total_page < 1){ $total_page = 1; };
        $total_posts_n_holder_page = $total_page . '-1';
        return view('user.content.posts_list', compact('layout', 'function', 'name_class', 'data_nav', 'data_content', 'form_option', 'total_posts_n_holder_page'));
    }
    public function postPostsList(Request $request){
        $layout = "WebUserList.css";
        $function = "list/PageMode.css";
        $main = new WebDataUser;
        $name_class = $main->class_name;
        $data_nav = $main->navData();
        
        //$data = Posts::postsGetList('posts_posts');
        $data = Posts::postsGetList('posts_posts', $request->category, $request->input);
        $form_option = $data[0];
        $data_content = $data[1];
        //total_posts
        count($data[1]);
        $total_posts = count($data[1]);
        $total_page = $total_posts/10;
        $total_page = round($total_page, 0, PHP_ROUND_HALF_UP); 
        if($total_page < 1){ $total_page = 1; };
        $total_posts_n_holder_page = $total_page . '-1';
        
        return view('User.content.posts_list', compact('layout', 'function', 'name_class', 'data_nav', 'data_content', 'form_option', 'total_posts_n_holder_page'));
    }
}
