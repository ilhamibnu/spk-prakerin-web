<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absensi;
use App\Models\Cpe;
use App\Models\Ftth;
use App\Models\Kjt;
use App\Models\NilaiSemester;
use App\Models\Kriteria;
use App\Models\NilaiKepentingan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'id_role' => 1,
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'id_role' => 2,
        ]);

        Kriteria::create([
            'name' => 'Ftth',
            'bobot' => 0.3,
            'jenis' => 'Cost',
        ]);

        Kriteria::create([
            'name' => 'Cpe',
            'bobot' => 0.2,
            'jenis' => 'Cost',
        ]);

        Kriteria::create([
            'name' => 'Absensi',
            'bobot' => 0.2,
            'jenis' => 'Cost',
        ]);

        Kriteria::create([
            'name' => 'Kjt',
            'bobot' => 0.2,
            'jenis' => 'Benefit',
        ]);

        Kriteria::create([
            'name' => 'Nilai Semester',
            'bobot' => 0.2,
            'jenis' => 'Benefit',
        ]);

        NilaiKepentingan::create([
            'name' => 'Sangat Rendah',
            'bobot' => 0,
        ]);

        NilaiKepentingan::create([
            'name' => 'Rendah',
            'bobot' => 0.25,
        ]);

        NilaiKepentingan::create([
            'name' => 'Cukup',
            'bobot' => 0.5,
        ]);

        NilaiKepentingan::create([
            'name' => 'Tinggi',
            'bobot' => 0.75,
        ]);

        NilaiKepentingan::create([
            'name' => 'Sangat Tinggi',
            'bobot' => 1,
        ]);

        Absensi::create([
            'name' => '<60',
            'id_nilai_kepentingan' => 1,
        ]);

        Absensi::create([
            'name' => '60-69',
            'id_nilai_kepentingan' => 2,
        ]);

        Absensi::create([
            'name' => '70-79',
            'id_nilai_kepentingan' => 3,
        ]);

        Absensi::create([
            'name' => '80-89',
            'id_nilai_kepentingan' => 4,
        ]);

        Absensi::create([
            'name' => '>=90',
            'id_nilai_kepentingan' => 5,
        ]);


        Cpe::create([
            'name' => '<60',
            'id_nilai_kepentingan' => 1,
        ]);

        Cpe::create([
            'name' => '60-69',
            'id_nilai_kepentingan' => 2,
        ]);

        Cpe::create([
            'name' => '70-79',
            'id_nilai_kepentingan' => 3,
        ]);

        Cpe::create([
            'name' => '80-89',
            'id_nilai_kepentingan' => 4,
        ]);

        Cpe::create([
            'name' => '>=90',
            'id_nilai_kepentingan' => 5,
        ]);


        Ftth::create([
            'name' => '<60',
            'id_nilai_kepentingan' => 1,
        ]);

        Ftth::create([
            'name' => '60-69',
            'id_nilai_kepentingan' => 2,
        ]);

        Ftth::create([
            'name' => '70-79',
            'id_nilai_kepentingan' => 3,
        ]);

        Ftth::create([
            'name' => '80-89',
            'id_nilai_kepentingan' => 4,
        ]);

        Ftth::create([
            'name' => '>=90',
            'id_nilai_kepentingan' => 5,
        ]);


        Kjt::create([
            'name' => '<60',
            'id_nilai_kepentingan' => 1,
        ]);

        Kjt::create([
            'name' => '60-69',
            'id_nilai_kepentingan' => 2,
        ]);

        Kjt::create([
            'name' => '70-79',
            'id_nilai_kepentingan' => 3,
        ]);

        Kjt::create([
            'name' => '80-89',
            'id_nilai_kepentingan' => 4,
        ]);

        Kjt::create([
            'name' => '>=90',
            'id_nilai_kepentingan' => 5,
        ]);


        NilaiSemester::create([
            'name' => '<60',
            'id_nilai_kepentingan' => 1,
        ]);

        NilaiSemester::create([
            'name' => '60-69',
            'id_nilai_kepentingan' => 2,
        ]);

        NilaiSemester::create([
            'name' => '70-79',
            'id_nilai_kepentingan' => 3,
        ]);

        NilaiSemester::create([
            'name' => '80-89',
            'id_nilai_kepentingan' => 4,
        ]);

        NilaiSemester::create([
            'name' => '>=90',
            'id_nilai_kepentingan' => 5,
        ]);
    }
}
