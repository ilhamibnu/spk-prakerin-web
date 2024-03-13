<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKepentingan extends Model
{
    use HasFactory;

    protected $table = 'tb_nilai_kepentingan';

    protected $fillable = [
        'name',
    ];

    public function detailSiswa()
    {
        return $this->hasMany(DetailSiswa::class, 'id_nilai_kepentingan', 'id');
    }

    public function detailMitra()
    {
        return $this->hasMany(DetailMitra::class, 'id_nilai_kepentingan', 'id');
    }
}
