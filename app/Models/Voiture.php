<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Voiture
{
    abstract function __construct();

    abstract function getMarque();

    public function getText(){
        
    }
}