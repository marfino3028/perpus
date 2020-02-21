<?php

namespace App\Exports;

use App\Buku;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
        $ar_buku = DB::table('buku')
        ->join('pengurus', 'pengurus.id', '=', 'buku.pengurus_id')
        ->select('buku.*', 'pengurus.nama AS namapengurus')
        ->get();
        return $ar_buku;
    }
}
