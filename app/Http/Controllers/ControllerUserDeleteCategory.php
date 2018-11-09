<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sources\Cls\WebClass\WebFunction\DeleteCategory;

class ControllerUserDeleteCategory extends Controller
{
    public function postDeleteCategory(Request $request){
        DeleteCategory::deleteCategory($request);
        return redirect()->back();
    }
}
