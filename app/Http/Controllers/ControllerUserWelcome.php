<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;

use App\Sources\Cls\WebClass\Web\WebDataUserWelcome;

class ControllerUserWelcome extends Controller
{
    public function getUserWelcome(){
        $data = new WebDataUserWelcome;
        $name_class = $data->class_name;
        $data_nav = $data->navData();
        //var_dump($data);
        return view('user.content.welcome', compact('name_class', 'data_nav'));
    }
}
