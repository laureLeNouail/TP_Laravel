<?php 

namespace App\Models;


class Observer
{
    public $count = 0;

    public function count(){
        
        return $this->count +=1;
    }
    public function display(){
        
        return $this->count;
    }
        
}