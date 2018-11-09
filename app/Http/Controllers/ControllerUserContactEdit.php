<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Sources\Cls\WebClass\Web\WebDataUser;
use App\Sources\Cls\WebClass\Func\Posts;

class ControllerUserContactEdit extends Controller
{
    public function getEditContact(){
        $layout = "WebUserPost.css";
        $main = new WebDataUser;
        $name_class = $main->class_name;
        $data_nav = $main->navData();
        
        $db_contact = DB::table('contact')->where('id', 1)->first();
        return view('User.content.contact_edit', compact('layout', 'name_class', 'data_nav', 'db_contact'));
    }
    public function postEditContact(Request $request){
        $flag = 0;
        $total_value[0]['name'] = 'facebook';
        $total_value[0]['value'] = $request->facebook;
        $total_value[1]['name'] = 'youtube';
        $total_value[1]['value'] = $request->youtube;
        $total_value[2]['name'] = 'instagram';
        $total_value[2]['value'] = $request->instagram;
        //map
        $str_map = $request->map;
        $str_map = explode(" ",$str_map);
        
        $total_value[3]['name'] = 'map';
        $total_value[3]['value'] = $str_map[1];
        foreach($total_value as $value){
            if($value['value'] !== null){
                DB::table('contact')->where('id', 1)->update([$value['name'] => $value['value']]);
            } 
        }
        DB::table('contact')->where('id', 1)->update(['value_en' => $request->value['en']]);
        DB::table('contact')->where('id', 1)->update(['value_vn' => $request->value['vn']]);
        if($flag == 0){
            return redirect()->route('getEditContact')->withErrors('Cập nhật thành công!');
        }   else    {
            return redirect()->route('getEditContact')->withErrors('Không thành công! vui lòng thử lại');
        }
    }
}
