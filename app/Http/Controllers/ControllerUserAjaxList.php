<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\WebFunction\AjaxUserList;

class ControllerUserAjaxList extends Controller
{
    public function postAjaxList(Request $request){
        $ajax = new AjaxUserList;
        $return = $ajax->postAjaxUserList($request->table, $request->column, $request->soft);
        return $return;
    }
}
