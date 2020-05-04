<?php

namespace App\Exports;

use App\TblProjekt;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProjektExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblProjekt::all();
    }
}
