<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSemester extends Model
{
    use HasFactory;

    protected $table = 'tb_nilai_semester';

    protected $fillable = [
        'name',
        'id_nilai_kepentingan',
    ];

    public function nilaiKepentingan()
    {
        return $this->belongsTo(NilaiKepentingan::class, 'id_nilai_kepentingan', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id');
    }
}
