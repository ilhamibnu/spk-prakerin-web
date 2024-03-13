<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'tb_mitra';

    protected $fillable = [
        'name',
        'deskripsi',
        'alamat',

    ];

    public function detailMitra()
    {
        return $this->hasMany(DetailMitra::class, 'id_mitra', 'id');
    }
}
