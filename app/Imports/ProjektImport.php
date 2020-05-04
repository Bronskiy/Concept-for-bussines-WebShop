<?php

namespace App\Imports;

use App\TblProjekt;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class ProjektImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    // HeadingRowFormatter::default('none');

    public function model(array $row)
    {
        return new TblProjekt([
          'id'     => $row['ProjektNr'],
          'projekt_name'    => $row['Projektbezeichnung'],
          'idAdresse'    => $row['fiAdressNr'],
          'projekt_description'    => $row['Description'],
        ]);
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
}
