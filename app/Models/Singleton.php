<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singleton
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $count = 0;

    private static $instance;

    private function __construct(){
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance=new Singleton;
        }

        return self::$instance;
    }

    public function increment(){
       return ++ $this->count;
    }
}
