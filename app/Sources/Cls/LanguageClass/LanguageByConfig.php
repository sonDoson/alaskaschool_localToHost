<?php 
namespace App\Srouces\Cls\Language;

use App\Srouces\Cls\Language\LanguageInterface;
use Illuminate\Http\Request;

class LanguageByConfig implements LanguageInterface{
    
    public function returnLanguage(Request $request){
        //check session
        if($request->session()->has('language')){
            return $value = $request->session()->get('language');
        }   else    {
            include_once(__DIR__ . '/../Config/config.php');
            return $value = $config['language'];
        }
    }
    
    public function changeLanguage($language_input, Request $request){
        //change in session
        $request->session()->put('language', $language_input);
    }
    
}