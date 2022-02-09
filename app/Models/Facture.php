<?php 

namespace App\Models;


class Facture
{
    public $prix=0;

    public function addPrix($voiture){

        $this->prix+=$voiture->prix;
       return $this->prix;
    }


}