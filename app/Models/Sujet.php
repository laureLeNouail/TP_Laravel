<?php 

namespace App\Models;


class Sujet
{
    public $tabObs = [];

    public function avertir(){
        $listeObs=$this->tabObs;

        echo "Notification...";

        foreach($listeObs as $observer){
            $observer->count();
        }
    }

    public function ajoutObservers($obs){
        
        return $this->tabObs[] = $obs;
    }

    public function supprObs($obs){
        unset($this->tabObs);
    }
        
}