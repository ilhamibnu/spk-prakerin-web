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
        'bobot',
    ];

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_nilai_kepentingan');
    }

    public function cpe()
    {
        return $this->hasMany(Cpe::class, 'id_nilai_kepentingan');
    }

    public function ftth()
    {
        return $this->hasMany(Ftth::class, 'id_nilai_kepentingan');
    }

    public function kjt()
    {
        return $this->hasMany(Kjt::class, 'id_nilai_kepentingan');
    }

    public function nilaisemester()
    {
        return $this->hasMany(NilaiSemester::class, 'id_nilai_kepentingan');
    }
}
