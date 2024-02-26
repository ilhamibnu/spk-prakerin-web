<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
    }
}
