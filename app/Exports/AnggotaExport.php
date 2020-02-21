<?php

namespace App\Exports;

use App\Anggota;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class AnggotaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         $ar_anggota = DB::table('anggota')
        ->join('buku', 'buku.id', '=', 'anggota.buku_id')
        ->select('anggota.*', 'buku.nama AS namabuku')
        ->get();
        return $ar_anggota;
    }
}
