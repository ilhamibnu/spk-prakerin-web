<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absensi;
use App\Models\Cpe;
use App\Models\Ftth;
use App\Models\Kjt;
use App\Models\NilaiSemester;
use App\Models\Kriteria;
use App\Models\Mitra;
use App\Models\Role;
use App\Models\Siswa;
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
            'jenis' => 'Benefit',
        ]);

        Kriteria::create([
            'name' => 'Cpe',
            'bobot' => 0.2,
            'jenis' => 'Benefit',
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
            'jenis' => 'Cost',
        ]);

        Absensi::create([
            'name' => '<60',
            'bobot' => 0.25
        ]);

        Absensi::create([
            'name' => '60-69',
            'bobot' => 0.5
        ]);

        Absensi::create([
            'name' => '70-79',
            'bobot' => 0.75
        ]);

        Absensi::create([
            'name' => '80-89',
            'bobot' => 0.9
        ]);

        Absensi::create([
            'name' => '>=90',
            'bobot' => 1
        ]);


        Cpe::create([
            'name' => '<60',
            'bobot' => 0.25
        ]);

        Cpe::create([
            'name' => '60-69',
            'bobot' => 0.5
        ]);

        Cpe::create([
            'name' => '70-79',
            'bobot' => 0.75
        ]);

        Cpe::create([
            'name' => '80-89',
            'bobot' => 0.9
        ]);

        Cpe::create([
            'name' => '>=90',
            'bobot' => 1
        ]);


        Ftth::create([
            'name' => '<60',
            'bobot' => 0.25
        ]);

        Ftth::create([
            'name' => '60-69',
            'bobot' => 0.5
        ]);

        Ftth::create([
            'name' => '70-79',
            'bobot' => 0.75
        ]);

        Ftth::create([
            'name' => '80-89',
            'bobot' => 0.9
        ]);

        Ftth::create([
            'name' => '>=90',
            'bobot' => 1
        ]);


        Kjt::create([
            'name' => '<60',
            'bobot' => 0.25
        ]);

        Kjt::create([
            'name' => '60-69',
            'bobot' => 0.5
        ]);

        Kjt::create([
            'name' => '70-79',
            'bobot' => 0.75
        ]);

        Kjt::create([
            'name' => '80-89',
            'bobot' => 0.9
        ]);

        Kjt::create([
            'name' => '>=90',
            'bobot' => 1
        ]);


        NilaiSemester::create([
            'name' => '<60',
            'bobot' => 0.25
        ]);

        NilaiSemester::create([
            'name' => '60-69',
            'bobot' => 0.5
        ]);

        NilaiSemester::create([
            'name' => '70-79',
            'bobot' => 0.75
        ]);

        NilaiSemester::create([
            'name' => '80-89',
            'bobot' => 0.9
        ]);

        NilaiSemester::create([
            'name' => '>=90',
            'bobot' => 1
        ]);

        Siswa::create([
            'nisn' => '123',
            'name' => 'Siswa 1',
            'id_ftth' => 2,
            'id_cpe' => 4,
            'id_absensi' => 3,
            'id_kjt' => 3,
            'id_nilai_semester' => 5,
        ]);

        Siswa::create([
            'nisn' => '124',
            'name' => 'Siswa 2',
            'id_ftth' => 3,
            'id_cpe' => 5,
            'id_absensi' => 4,
            'id_kjt' => 4,
            'id_nilai_semester' => 4,
        ]);

        Siswa::create([
            'nisn' => '125',
            'name' => 'Siswa 3',
            'id_ftth' => 4,
            'id_cpe' => 3,
            'id_absensi' => 5,
            'id_kjt' => 5,
            'id_nilai_semester' => 3,
        ]);

        Siswa::create([
            'nisn' => '126',
            'name' => 'Siswa 4',
            'id_ftth' => 5,
            'id_cpe' => 2,
            'id_absensi' => 2,
            'id_kjt' => 2,
            'id_nilai_semester' => 2,
        ]);

        Siswa::create([
            'nisn' => '127',
            'name' => 'Siswa 5',
            'id_ftth' => 1,
            'id_cpe' => 1,
            'id_absensi' => 1,
            'id_kjt' => 1,
            'id_nilai_semester' => 1,
        ]);

        Mitra::create([
            'name' => 'Mitra 1',
            'deskripsi' => 'Mitra 1 deskripsi',
            'alamat' => 'Mitra 1 alamat',
            'id_ftth' => 5,
            'id_cpe' => 4,
            'id_absensi' => 4,
            'id_kjt' => 3,
            'id_nilai_semester' => 2,
        ]);

        Mitra::create([
            'name' => 'Mitra 2',
            'deskripsi' => 'Mitra 2 deskripsi',
            'alamat' => 'Mitra 2 alamat',
            'id_ftth' => 4,
            'id_cpe' => 3,
            'id_absensi' => 3,
            'id_kjt' => 2,
            'id_nilai_semester' => 1,
        ]);

        Mitra::create([
            'name' => 'Mitra 3',
            'deskripsi' => 'Mitra 3 deskripsi',
            'alamat' => 'Mitra 3 alamat',
            'id_ftth' => 3,
            'id_cpe' => 2,
            'id_absensi' => 2,
            'id_kjt' => 1,
            'id_nilai_semester' => 5,
        ]);

        Mitra::create([
            'name' => 'Mitra 4',
            'deskripsi' => 'Mitra 4 deskripsi',
            'alamat' => 'Mitra 4 alamat',
            'id_ftth' => 2,
            'id_cpe' => 1,
            'id_absensi' => 1,
            'id_kjt' => 5,
            'id_nilai_semester' => 4,
        ]);

        Mitra::create([
            'name' => 'Mitra 5',
            'deskripsi' => 'Mitra 5 deskripsi',
            'alamat' => 'Mitra 5 alamat',
            'id_ftth' => 1,
            'id_cpe' => 5,
            'id_absensi' => 5,
            'id_kjt' => 4,
            'id_nilai_semester' => 3,
        ]);
    }
}
