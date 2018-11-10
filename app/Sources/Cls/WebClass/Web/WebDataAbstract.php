<?php
namespace App\Sources\Cls\WebClass\Web;

abstract class WebDataAbstract{
    public $class_name, $language;
    public function __construct (){
        $sub_class_name = explode("\\",get_class($this));
        $this->class_name = $sub_class_name[5];
        //include language
        //
    }
}