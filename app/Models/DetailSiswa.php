<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSiswa extends Model
{
    use HasFactory;

    protected $table = 'tb_detail_siswa';

    protected $fillable = [
        'id_siswa',
        'id_kriteria',
        'id_nilai_kepentingan',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
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
