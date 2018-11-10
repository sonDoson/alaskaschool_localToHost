<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Method\PostsDeleteItem;

class ControllerUserPostsDelete extends Controller
{
    public function getPostsDelete(Request $request){
        $flag = 0;
        PostsDeleteItem::postsGetSingleItem($request->table_posts, $request->id_posts);
        return redirect()->route('getPostsList')->withErrors('Xóa thành công! Bài viết số ' . $request->id_posts);
    }
}
