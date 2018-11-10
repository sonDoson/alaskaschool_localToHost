<?php
namespace App\Sources\Cls\Config;

use Session;

class Config{
    public static function configLanguage(){
        if (!Session::has('lang')) {
            $value = 'vn';
            Session::put('lang', $value);
            return $value;
        }   else    {
            $value = Session::get('lang');
            return $value;
        }
    }
}
?>