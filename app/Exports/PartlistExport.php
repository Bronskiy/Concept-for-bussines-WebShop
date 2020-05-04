<?php

namespace App\Exports;

use App\TblPartlist;
use Maatwebsite\Excel\Concerns\FromCollection;

class PartlistExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblPartlist::all();
    }
}
