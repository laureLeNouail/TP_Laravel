<?php 

namespace App\Models;

class Factory
{
    public static function creaVoiture($marque){
        if($marque=='Renault'){
            return new Renault();
        }
        elseif($marque=='Opel'){
            return new Opel();
        }
        return "ok";
    }
        
}