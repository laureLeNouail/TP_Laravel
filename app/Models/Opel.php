<?php 

namespace App\Models;

class Opel Extends Voiture
{
    public $object;
    public $prix;
    public $option= [];

    function __construct(){
        $this->object = 'Astra';
        $this->prix = 4000;
        $this->option = ["Bleu", "GPS"];
    }
      
    public function getMarque(){
        return "Cette voiture est de la marque Opel";
    }
    
}