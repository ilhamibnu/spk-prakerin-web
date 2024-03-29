<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'tb_kriteria';

    protected $fillable = [
        'name',
        'bobot',
        'jenis'
    ];

    public function detailSiswa()
    {
        return $this->hasMany(DetailSiswa::class, 'id_kriteria', 'id');
    }

    public function detailMitra()
    {
        return $this->hasMany(DetailMitra::class, 'id_kriteria', 'id');
    }
}
