<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sources\Cls\WebClass\Func\Method\PostsDeleteItem;

class ControllerUserPostsDeleteItem extends Controller
{
    public function getPostsDeleteItem(Request $request){
        PostsDeleteItem::postsGetSingleItem($request->table_posts, $request->id_posts);
    }
}
