<?php

namespace App\Exports;

use App\TblAdress;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdressenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblAdress::all();
    }
}
