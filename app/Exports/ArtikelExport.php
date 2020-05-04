<?php

namespace App\Exports;

use App\TblArtikel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArtikelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblArtikel::all();
    }
}
