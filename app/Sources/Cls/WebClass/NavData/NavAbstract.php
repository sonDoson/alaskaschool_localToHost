<?php
namespace App\Sources\Cls\WebClass\NavData;

abstract class NavAbstract{
   /* //language
    public $language;
    //if dont have take on database to session
    public function __construct($language){
        $this->language = $language;
    }*/
    
    abstract public function getDataNav();
    
}