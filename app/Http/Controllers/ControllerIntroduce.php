<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Method\PostsGetItems;
use App\Sources\Cls\WebClass\Func\Method\PostsGetStress;
use App\Sources\Cls\Config\Config;
use DB;

class ControllerIntroduce extends Controller
{
    public function getIntroduce(){
        //section
        $lang_section = Config::configLanguage();
        $lang[] = 'name_' . $lang_section;
        $lang[] = 'value_' . $lang_section;
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
        //category
        $category = Category::categoryGet('posts_category');
        //section 0
        $section_0 = PostsGetItems::postsGetItems('posts_posts', 1);
        $link = DB::table('video_link')->where('id',1)->first();
        $link = $link->value;
        //section 1
        $section_1 = PostsGetItems::postsGetItems('posts_posts', 4);
        //section 2
        $section_2 = PostsGetStress::postsGetStress('posts_posts');
        return view('client.content.introduce', compact('lang', 'contact', 'category', 'section_0', 'link', 'section_1', 'section_2'));
    }
}
