<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tb_siswa';

    protected $fillable = [
        'nisn',
        'name',
        'rekomendasi',
    ];

    public function detailSiswa()
    {
        return $this->hasMany(DetailSiswa::class, 'id_siswa', 'id');
    }
}
