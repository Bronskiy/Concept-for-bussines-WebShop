<?php

namespace App\Imports;

use App\TblArtikel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class ArtikelImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TblArtikel([
          'id'     => $row['ID'],
          'artikel_name'    => $row['Bezeichnung'],
          'artikel_nr2'    => $row['ArtNummer2'],
          'artikel_description'    => $row['BeschreibungB'],
          'artikel_delivery_days'    => $row['Liefezeit'],
          'artikel_vkprice'    => $row['Preis_VK'],
          'artikel_currency'    => $row['Waehrung'],
          'artikel_unit'    => $row['Liefereinheit'],
          'artikel_price_valid'    => $row['PriceValiUnit'],
        ]);
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
}
