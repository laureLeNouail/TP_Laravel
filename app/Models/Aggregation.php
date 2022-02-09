<?php 

namespace App\Models;


class Aggregation
{

    public $offset = 0;
    public $tab = [];

    public function __construct($tabVoiture){
        $this->tab = $tabVoiture;
    }

    public function hasnext(){
        return isset($tab[$this->offset]);
    }

    public function next(){
        return $tab[$offset++];
    }
}