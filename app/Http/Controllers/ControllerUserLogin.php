<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

use App\Sources\Cls\SessionClass\AuthSession;

class ControllerUserLogin extends Controller
{
    public function getLogin(){
        return view('user.content.login');
    }
    public function postLogin(Request $request){
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect()->route('getUserWelcome');
		}	else	{
			return redirect('login');
		}
    }
}
