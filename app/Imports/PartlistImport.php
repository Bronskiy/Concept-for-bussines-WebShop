<?php

namespace App\Imports;

use App\TblPartlist;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class PartlistImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TblPartlist([
          'id'     => $row['ID_Nummer'],
          'tag_number'    => $row['iDTagNumber'],
          'idArtikel'    => $row['fiArtikel'],
          'idProjekt'    => $row['fiProjekt'],
          'menge'    => $row['Menge'],
        ]);
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
}
