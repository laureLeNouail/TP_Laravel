<?php 

namespace App\Models;

class factureLine
{
    public static function marqueVoiture($marque){
        if($marque=='Renault'){
            $auto = new Strategie1();
        }
        elseif($marque=='Opel'){
            $auto = new Strategie2();
        }
        return $auto;
    }
        
}