<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;

class ControllerSendMail extends Controller
{
    public function postSendMail(Request $request){
        $email = DB::table('users')->where('id', 1)->first();
        $email = $email->email;
        
        $data['email'] = $request->email; 
        $data['name'] = $request->name; 
        $data['number'] = $request->number; 
        $data['content'] = $request->content; 
        Mail::send('client.content.mail_layout', $data, function($msg){
            $msg->from('xulazy@gmail.com', 'Hệ Thống Email Alaska School');
            $msg->to($email ,'someone')->subject('Người dùng gửi tin nhắn.');
        });
        return redirect('/thank-you');
    }
}
