<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class KelolaUserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ar_kelolauser = DB::table('users')
            ->get();
        return $ar_kelolauser;
    }
}
