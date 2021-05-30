<?php

namespace App\Imports;

use App\Models\KreisModel;
use App\Models\BundeslandModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
//use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KreisImport implements ToModel, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    $kreis = DB::table('kreis_models')
    ->join('bundesland_models', 'bundesland_models.id', '=', 'kreis_models.bundesland_id')
    ->where('abkuerzung', $request->input('abkuerzung'))->get();


    public function model(array $row)
    {

        return new KreisModel([
          
            'id'=>$row['0'],
            'abkuerzung' => $row['1'],
            'kreis' => $row['kreis'],
            'bundesland_id' =>BundeslandModel::where('bundesland', $row['bundesland'])->firstOrFail()->id,
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'ISO-8859-1'
        ];
    }

}
