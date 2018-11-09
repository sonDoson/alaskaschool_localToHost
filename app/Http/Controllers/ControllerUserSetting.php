<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\Web\WebDataUserWelcome;
use DB;
use Hash;

class ControllerUserSetting extends Controller
{
    public function getUserSetting(){
        $layout = "WebUserPost.css";
        $data = new WebDataUserWelcome;
        $name_class = $data->class_name;
        $data_nav = $data->navData();
        return view('User.content.setting', compact('layout', 'name_class', 'data_nav'));
    }
    public function postUserSetting(Request $request){
        $flag = 0;
        if($request->name !== null){
            DB::table('users')->where('id', 1)->update(['name' => $request->name]);
        }
        if($request->email !== null){
            DB::table('users')->where('id', 1)->update(['email' => $request->email]);
        }
        
        $pass = DB::table('users')->where('id', 1)->first();
        $pass = $pass->password;
        if(Hash::check($request->pw_old,$pass)) {
            if($request->pw_new[0] === $request->pw_new[1]){
                $new_pass = bcrypt($request->pw_new[1]);
                DB::table('users')->where('id', 1)->update(['password' => $new_pass ]);
            }   else    {
                $flag = 1;
            }
        }
        
        if($request->link_video !== null){
            DB::table('video_link')->where('id', 1)->update(['value' => $request->link_video]);
        }
        
        if($flag == 0){
            return redirect()->route('getUserSetting')->withErrors('Cập nhật thành công!');
        }   else    {
            return redirect()->route('getUserSetting')->withErrors('Không thành công! vui lòng thử lại');
        }
    }
}
