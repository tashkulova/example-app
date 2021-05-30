<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BundeslandModel extends Model {
    
    use HasFactory;

    public function kreise(){

        return $this->hasMany('App\Models\KreisModel');
    }
}
