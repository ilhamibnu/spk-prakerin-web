<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tb_siswa';

    protected $fillable = [
        'nis',
        'name',
        'id_ftth',
        'id_cpe',
        'id_absensi',
        'id_kjt',
        'id_nilai_semester',
    ];

    public function ftth()
    {
        return $this->belongsTo(Ftth::class, 'id_ftth', 'id');
    }

    public function cpe()
    {
        return $this->belongsTo(Cpe::class, 'id_cpe', 'id');
    }

    public function absensi()
    {
        return $this->belongsTo(Absensi::class, 'id_absensi', 'id');
    }

    public function kjt()
    {
        return $this->belongsTo(Kjt::class, 'id_kjt', 'id');
    }

    public function nilaiSemester()
    {
        return $this->belongsTo(NilaiSemester::class, 'id_nilai_semester', 'id');
    }
}
