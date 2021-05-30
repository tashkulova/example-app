<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreisModel extends Model{

    use HasFactory;

    protected $fillable = ['id','abkuerzung', 'kreis', 'bundesland_id'];
    
    public function bundesland(){
        
        return $this->belongsTo('App\Models\BundeslandModel');
    }
    
    public function getKreis(){
        $record = DB::table('kreis_models')->select('id', 'abkuerzung', 'kreis', 'bundesland_id')->get();
        return $record;
    }

}
