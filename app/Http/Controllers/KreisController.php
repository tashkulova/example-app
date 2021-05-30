<?php

namespace App\Http\Controllers;
use Excel;
use App\Imports\KreisImport;
use Illuminate\Http\Request;
use App\Http\Requests\KreisRequest;
use App\Models\KreisModel;
use DB;

class KreisController extends Controller {

    protected $table = "kreis_models";
    
    public function submit(KreisRequest $request){
  //      $kreis = new KreisModel();
   //     echo $request->input('abkuerzung');
        
        $kreis = DB::table('kreis_models')
        ->join('bundesland_models', 'bundesland_models.id', '=', 'kreis_models.bundesland_id')
        ->where('abkuerzung', $request->input('abkuerzung'))->get();

       
        
        if(count($kreis)==0){
        //    return response()->json(["message"=>"Kreis wurde nicht gefunden. Bitte pruefen Sie ihre Eingaben"]);
            return redirect()->route('home')->with('warning',' Der Landkreis wurde nicht gefunden. Bitte pruefen Sie ihre Eingaben');
        }
        else{
           
            return view( 'review',  compact('kreis'));
        }
                   
    }

    public function store(){ 
        $values = DB::table('kreis_models')
        ->join('bundesland_models', 'bundesland_models.id', '=', 'kreis_models.bundesland_id')
        ->get();
        return view('data', compact('values'));
    }

    public function sort(Request $request){
         
        $values = DB::table('kreis_models')
        ->join('bundesland_models', 'bundesland_models.id', '=', 'kreis_models.bundesland_id')
        ->where('kreis',  $request->input('search'))->get();


        if(count($values)==0){
            //    return response()->json(["message"=>"Kreis wurde nicht gefunden. Bitte pruefen Sie ihre Eingaben"]);
                return redirect()->route('data')->with('warning',' Der Landkreis wurde nicht gefunden. Bitte pruefen Sie ihre Eingaben');
            }
         else{
               
            return view( 'data', compact('values'));
         }

    }

    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request){
        Excel:: import(new KreisImport, $request->file);

        return "File was downloaded!";
    }
}
    



