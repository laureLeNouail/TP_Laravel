<?php 

namespace App\Models;


class Facade
{
    public static function commander(){
        
        $voiture = Factory::creaVoiture('Renault');
        $voiture2 = Factory::creaVoiture('Opel');

        $concession = new Concession();
        $concession->ajoutConcession($voiture);
        $concession->ajoutConcession($voiture2);

        $facture = new Facture();
        $facture->addPrix($voiture);
        $facture->addPrix($voiture2);

        $tab = ['Voiture1' => $voiture, 'Voiture2' => $voiture2, 'Concession' => $concession, 'Facture' => $facture];
        
        return $tab;
    }
        
}