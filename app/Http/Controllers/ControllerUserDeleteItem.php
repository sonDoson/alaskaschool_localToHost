<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\WebFunction\DeleteItem;

class ControllerUserDeleteItem extends Controller
{
    public function postDeleteItem(Request $request){
        DeleteItem::deleteItem($request);
    }
}
