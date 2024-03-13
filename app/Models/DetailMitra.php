<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMitra extends Model
{
    use HasFactory;

    protected $table = 'tb_detail_mitra';

    protected $fillable = [
        'id_mitra',
        'id_kriteria',
        'id_nilai_kepentingan',
        'bobot',
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id');
    }

    public function nilaiKepentingan()
    {
        return $this->belongsTo(NilaiKepentingan::class, 'id_nilai_kepentingan', 'id');
    }
}
