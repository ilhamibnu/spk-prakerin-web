<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absensi;
use App\Models\Cpe;
use App\Models\Ftth;
use App\Models\Kjt;
use App\Models\NilaiSemester;
use App\Models\Kriteria;
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

    }
}
