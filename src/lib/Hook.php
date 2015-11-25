<?php

namespace Pvol\Flow;

abstract class Hook
{
    public abstract function action($step, $status);
    
    public static function factory(){
        return new static();
    }
  
}
