<?php
namespace App\Sources\Cls\WebClass\Web;

use App\Sources\Cls\WebClass\Web\WebDataAbstract;
use App\Sources\Cls\WebClass\NavData\NavUser;

class WebDataUser extends WebDataAbstract{
    
    public function navData(){
        $data = new NavUser;
        return $data->getDataNav();
    }
    
}