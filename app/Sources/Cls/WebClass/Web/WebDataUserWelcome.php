<?php
namespace App\Sources\Cls\WebClass\Web;

use App\Sources\Cls\WebClass\Web\WebDataAbstract;
use App\Sources\Cls\WebClass\NavData\NavUser;

class WebDataUserWelcome extends WebDataAbstract{
    
    public function navData(){
        $data = new NavUser;
        return $data->getDataNav();
    }
    
    public function contentData(){
        $return = 'null';
        return $return;
    }
    
    public function footer(){
        $return = 'null';
        return $return;
    }
    
}