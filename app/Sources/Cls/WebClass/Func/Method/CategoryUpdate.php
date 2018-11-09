<?php
namespace App\Sources\Cls\WebClass\Func\Method;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class CategoryUpdate{
    public static function categoryUpdate($request){
        $validator = Validator::make($request->all(), 
        [
            'name.0' => 'unique:' . $request->table . ',name_en',
            'name.1' => 'unique:' . $request->table . ',name_vn'
        ],
        [
            'name.0.unique' => 'Danh mục Tiếng Anh đã tồn tại!',
            'name.1.unique' => 'Danh mục Tiếng Việt đã tồn tại!'
        ]);
        
        if($validator->fails()) {
            return $validator;
        }   elseif($request->input('name.0') == null && $request->input('name.1') == null)    {
            return "Không có gì thay đổi";
        }   elseif($request->input('name.0') != null && $request->input('name.1') == null)    {
            DB::table($request->table)->where('id', $request->id)->update(
            [
                'name_en' => $request->input('name.0'),
                'updated_at'=>  Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return null;
        }   elseif($request->input('name.0') == null && $request->input('name.1') != null)    {
            DB::table($request->table)->where('id', $request->id)->update(
            [
                'name_vn' => $request->input('name.1'),
                'updated_at'=>  Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return null;
        }   else    {
            DB::table($request->table)->where('id', $request->id)->update(
            [
                'name_en' => $request->input('name.0'),
                'name_vn' => $request->input('name.1'),
                'updated_at'=>  Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return null;
        }
    }
}
?>