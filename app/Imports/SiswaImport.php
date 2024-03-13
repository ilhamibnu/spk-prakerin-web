<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Siswa;

class SiswaImport implements ToModel
{
    public function model(array $row)
    {
        return new Siswa([
            'nisn' => $row[0],
            'name' => $row[1],
        ]);
    }
}
