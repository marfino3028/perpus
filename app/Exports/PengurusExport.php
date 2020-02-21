<?php

namespace App\Exports;

use App\Pengurus;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class PengurusExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ar_pengurus = DB::table('pengurus')
        ->get();
        return $ar_pengurus;
    }
}
