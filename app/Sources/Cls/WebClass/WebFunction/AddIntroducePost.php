<?php
namespace App\Sources\Cls\WebClass\WebFunction;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class AddIntroducePost{
    public static function addPost($request, $table){
        $validator = Validator::make($request->all(), 
        [
            'name.*' => 'required',
            'value.*' => 'required'
        ],
        [
            'name.en.required' => 'Vui long nhap ten tieng Anh',
            'name.vn.required' => 'Vui long nhap ten tieng Viet',
            'value.en.required' => 'Vui long nhap noi dung tieng Anh',
            'value.vn.required' => 'Vui long nhap noi dung tieng Viet'
        ]);
        if($validator->fails()) {
            return $validator;
        }   else    {
            $id = DB::table($table)->insertGetId(
                [
                    'id_category'   => $request->category,
                    'name_en'       => $request->name['en'],
                    'name_vn'       => $request->name['vn'],
                    'value_en'      => $request->value['en'],
                    'value_vn'      => $request->value['vn'],
                    'created_at'    => Carbon::now('Asia/Ho_Chi_Minh'),
                ]
            );
            
            return null;
        }
        //post form
        //$validator = Validator::make($request->all(), $rules, $message)->validate();
            
        //return redirect('user/library/list');
    }
}