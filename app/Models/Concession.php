<?php 

namespace App\Models;


class Concession
{
    public $tabVoiture = [];

    public function ajoutConcession($voiture){

        array_push($this->tabVoiture , $voiture);
        
        return $this->tabVoiture;
    }

    public function getIterator(){
        return new Aggregation($this->tabVoiture);
    }
}