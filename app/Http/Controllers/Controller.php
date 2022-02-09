<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Singleton;
use App\Models\Factory;
use App\Models\Facade;
use App\Models\Aggregation;
use App\Models\Concession;
use App\Models\Sujet;
use App\Models\Observer;
use App\Models\factureLine;
use App\Models\Template;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getpage(){
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();


        return view("Singleton", ["a" => $a ,"b" => $b]);
    }

    public function factory(){
        $a = Factory::creaVoiture('Renault');
        $b = Factory::creaVoiture('Opel');

        return view("Factory", ["a" => $a ,"b" => $b]);
    }

    public function facade(){
        $a = Facade::commander();
        
        return view("Facade", ["a" => json_encode($a)]);
    }

    public function aggregation(){
        $a = Factory::creaVoiture('Renault');
        $b = Factory::creaVoiture('Opel');

        $concession = new Concession();
        $concession->ajoutConcession($a);
        $concession->ajoutConcession($b);

        $iterateur=$concession->getIterator();
        return ["Aggregation", ["agg" => $iterateur]];
        //Je n'ai pas return une view car cela ne fonctionnait pas, j'ai donc return en dure
    }

    public function observeur(){
        $sujet= new Sujet();
        $a = new Observer();
        $b = new Observer();
        $sujet->ajoutObservers($a);
        $sujet->ajoutObservers($b);
        
        return view("observer", ["a" => $a, "b" => $b, "sujet" => $sujet]);
    }

    public function strategie($marque){
        $a = factureLine::marqueVoiture($marque);

        return view("Strategie", ["a" => $a]);
    }

    public function template($marque){
        $a = Factory::creaVoiture('Renault');
        $b = Factory::creaVoiture('Opel');

        return view("Template", ["a" => $a]);
    }

    public function command(){
        return view("Command");
    }
}
