<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class CategoryAdd{
    public static function categoryAdd($request, $table){
        $validator = Validator::make($request->all(), 
        [
            'name.0' => 'required|unique:' . $table . ',name_en',
            'name.1' => 'required|unique:' . $table . ',name_vn'
        ],
        [
            'name.0.required' => 'Vui lòng nhập danh mục tiếng Anh!',
            'name.1.required' => 'Vui lòng nhập danh mục tiếng Việt!',
            'name.0.unique' => 'Danh mục Tiếng Anh đã tồn tại!',
            'name.1.unique' => 'Danh mục Tiếng Việt đã tồn tại!'
        ]);
        if($validator->fails()) {
            return $validator;
        }   else    {
            DB::table($table)->insert(
            [
                'name_en' => $request->input('name.0'),
                'name_vn' => $request->input('name.1'),
                'created_at'=>  Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return null;
        }
    }
}
?>