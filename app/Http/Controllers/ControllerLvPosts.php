<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Method\PostsGetItems;
use App\Sources\Cls\WebClass\Func\Method\PostsGetSingleItem;
use App\Sources\Cls\Config\Config;
use DB;

class ControllerLvPosts extends Controller
{
    public function getPosts(Request $request, $id_cat, $id_pos){
        //contact
        $cont = DB::table('contact')->where('id', 1)->first();
        $contact = array();
        $contact['name_en'] = $cont->name_en;
        $contact['name_vn'] = $cont->name_vn;
        $contact['value_en'] = $cont->value_en;
        $contact['value_vn'] = $cont->value_vn;
        $contact['link']['facebook']['link'] = $cont->facebook;
        $contact['link']['facebook']['icon'] = 'fab fa-facebook';
        $contact['link']['youtube']['link'] = $cont->youtube;
        $contact['link']['youtube']['icon'] = 'fab fa-youtube';
        $contact['link']['instagram']['link'] = $cont->instagram;
        $contact['link']['instagram']['icon'] = 'fab fa-instagram';
        $contact['map'] = $cont->map;
        //section
        $lang_section = Config::configLanguage();
        $lang[] = 'name_' . $lang_section;
        $lang[] = 'value_' . $lang_section;
        
        $category = Category::categoryGet('posts_category');
        foreach($category as $i => $value){
            $category_item[$i] = PostsGetItems::postsGetItems('posts_posts', $i, 5);// order by cat
        }
        //section 0
        $section_0 = PostsGetSingleItem::postsGetSingleItem('posts_posts', $id_pos);
        //section 1
        $section_1 = PostsGetItems::postsGetItems('posts_posts', 4);
        return view('client.content.lv_posts', compact('lang', 'contact', 'category', 'section_1', 'section_0', 'category_item'));
    }
}
