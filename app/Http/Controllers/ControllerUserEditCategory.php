<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Sources\Cls\WebClass\Func\Category;
use App\Sources\Cls\WebClass\Func\Method\CategoryUpdate;

class ControllerUserEditCategory extends Controller
{
    public function postEditCategory(Request $request){
        $flag_back = CategoryUpdate::categoryUpdate($request);
        if($flag_back == null){
            return redirect()->back()->with('message' , 'Thành công!');
        }   else    {
            return redirect()->back()->withErrors($flag_back);
        }
    }
}
