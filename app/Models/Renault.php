<?php 

namespace App\Models;

class Renault Extends Voiture
{
    public $object;
    public $option= [];
    public $prix;

    function __construct(){
        $this->object = 'Twingo';
        $this->prix = 3000;
        $this->option=["Rouge", "5 portes"];
    }

    public function getMarque(){
        return "Cette voiture est de la marque Renault";
    }
}