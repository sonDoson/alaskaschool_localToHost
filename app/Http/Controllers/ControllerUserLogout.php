<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ControllerUserLogout extends Controller
{
    public function getLogout(){
        return redirect('/login');
    }
}
