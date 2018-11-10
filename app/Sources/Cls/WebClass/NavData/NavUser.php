<?php
namespace App\Sources\Cls\WebClass\NavData;

use App\Sources\Cls\WebClass\NavData\NavAbstract;
use Illuminate\Support\Facades\DB;

class NavUser extends NavAbstract{
    
    public function getDataNav(){
        //user rank
        //$user_rank = 1;
        //$value = 'value'.$this->language;
        $value = 'value_vn';
        
        $parent_menu = DB::table('user_menu_lv0')->get();
        
        if(!empty($parent_menu)){
            foreach($parent_menu as $k_p => $v_p){
                $key_array = $v_p->id . "-" . $v_p->value_en . "-" . $v_p->$value;
                $menu[$key_array] = array();
                $child_menu = DB::table('user_menu_lv1')->where('id_user_menu_lv0', $v_p->id)->get(); 
                if(!empty($child_menu)){
                    foreach($child_menu as $k_c => $v_c){
                        $menu[$key_array][$v_c->id]['value']= $v_c->value_en;
                        $menu[$key_array][$v_c->id]['value_child']= $v_c->$value;
                        $menu[$key_array][$v_c->id]['url']= str_replace(' ', '_', strtolower("user/" . $v_p->value_en . "/" . $v_c->value_en));
                    }
                }
            }
            return $menu;
        }
    }
    
}