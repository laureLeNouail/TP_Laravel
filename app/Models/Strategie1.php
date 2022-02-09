<?php 

namespace App\Models;

class Strategie1
{
    public $tva1="10%";

    public function getTva(){
        return $this->tva1;
    }
        
}