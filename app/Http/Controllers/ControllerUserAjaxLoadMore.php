<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\WebFunction\AjaxUserLoadPage;

class ControllerUserAjaxLoadMore extends Controller
{
    public function postAjaxLoadMore(Request $request){
        $ajax = new AjaxUserLoadPage;
        $return = $ajax->postAjaxUserLoadPage($request->table, $request->column, $request->soft, $request->index);
        return $return;
    }
}
