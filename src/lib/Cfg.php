<?php

namespace Pvol\Flow;

use Config;

class Cfg
{
    // 获取步骤名对应关系表
    public static function map($project_name = PROJECT_ZYD){
        $configs = Config::get('flow.' . $project_name. '.steps');
        $map = array();
        foreach($configs as $key=>$config){
            $map[$key] = $config['title'];
        }
        return $map;
    }
    
}
