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
use App\Models\NilaiKepentingan;
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
            'bobot' => 0.30,
            'jenis' => 'Benefit',
        ]);

        Kriteria::create([
            'name' => 'Cpe',
            'bobot' => 0.20,
            'jenis' => 'Benefit',
        ]);

        Kriteria::create([
            'name' => 'Absensi',
            'bobot' => 0.15,
            'jenis' => 'Cost',
        ]);

        Kriteria::create([
            'name' => 'Kjt',
            'bobot' => 0.20,
            'jenis' => 'Benefit',
        ]);

        Kriteria::create([
            'name' => 'Nilai Semester',
            'bobot' => 0.15,
            'jenis' => 'Benefit',
        ]);


        NilaiKepentingan::create([
            'name' => '<60',
        ]);

        NilaiKepentingan::create([
            'name' => '60-69',
        ]);

        NilaiKepentingan::create([
            'name' => '70-79',
        ]);

        NilaiKepentingan::create([
            'name' => '>=80',
        ]);

        Mitra::create([
            'name' => 'PT. Telkom Akses Probolinggo',
            'alamat' => 'Jalan Suroyo No. 37, Sukabumi, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67219',
            'deskripsi' => 'PT. Telkom Akses Probolinggo adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'PT. Telkom  Banyuwangi',
            'alamat' => 'Jl. Dr. Sutomo No. 61, Banyuwangi, Jawa Timur 68411, Indonesia. Nomor telepon: -, kode pos: 68411',
            'deskripsi' => 'PT. Telkom Banyuwangi adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'Assyifa Net',
            'alamat' => 'RT.01/RW.03, Dusun Ringinmulyo, Ringintelu, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68487',
            'deskripsi' => 'Assyifa Net adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'SCR NET.',
            'alamat' => 'H7X6+7HR, Krajan, Kebaman, Kec. Srono, Kabupaten Banyuwangi, Jawa Timur 68471',
            'deskripsi' => 'SCR NET adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'PT. Master Star Network',
            'alamat' => 'Krajan, Purwoharjo, Kec. Purwoharjo, Kabupaten Banyuwangi, Jawa Timur 68483',
            'deskripsi' => 'PT. Master Star Network adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'ANUGERAH NET.',
            'alamat' => 'VC22+JMH, Jl. Dermaga Pelabuhan Ketapang, Lkr. Kp. Baru, Bulusan, Kec. Kalipuro, Kabupaten Banyuwangi, Jawa Timur 68455',
            'deskripsi' => 'ANUGERAH NET adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'MM. GENTENG',
            'alamat' => 'Banyuwangi',
            'deskripsi' => 'MM. GENTENG adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'RIYADH NET Genteng',
            'alamat' => 'Banyuwangi',
            'deskripsi' => 'RIYADH NET Genteng adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'TA. Jember',
            'alamat' => 'Jl.Gajah Mada No.183 (at 6th Floor), Jember, Jawa Timur, Indonesia',
            'deskripsi' => 'TA. Jember adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'D5 NET JEMBER',
            'alamat' => 'Jember',
            'deskripsi' => 'D5 NET JEMBER adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'GASATEK JEMBER',
            'alamat' => 'Jl. Letjen Sutoyo V Lingkungan Sumber Pakem No.102B, Lingkungan Sumber Pak, Kebonsari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68122',
            'deskripsi' => 'GASATEK JEMBER adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'ARSENET JEMBER',
            'alamat' => 'Ruko Bumi, Jl. Bumi Tegal Besar No.3A, Karanganyar, Tegal Besar, Kaliwates, Jember Regency, East Java 68131',
            'deskripsi' => 'ARSENET JEMBER adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'PT. Telkom Akses Witel Bondowoso',
            'alamat' => 'Jl. Letnan Jend. Donald Isac Panjaitan No.6, Penatu, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68211',
            'deskripsi' => 'PT. Telkom Akses Witel Bondowoso adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'PT. Kopegtel Jember',
            'alamat' => 'PT. Kopegtel Jember	Jl. KH Agus Salim No.34, Tegal Besar Kulon, Tegal Besar, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131',
            'deskripsi' => 'PT. Kopegtel Jember adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'JME NET PRAJEKAN',
            'alamat' => 'Bondowoso',
            'deskripsi' => 'JME NET PRAJEKAN adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'PT. Lintas Jaringan Nusantara',
            'alamat' => 'Jl. Diponegoro No.79, Kotakulon, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68219',
            'deskripsi' => 'PT. Lintas Jaringan Nusantara adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'Tekling PT. Indosat',
            'alamat' => 'Bondowoso',
            'deskripsi' => 'Tekling PT. Indosat adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'BSTV BONDOWOSO',
            'alamat' => 'Jl. H. Hasyim No.7A, Krajan I, Grujugan Lor, Jambesari Darus Sholah, Kabupaten Bondowoso, Jawa Timur 68261',
            'deskripsi' => 'BSTV BONDOWOSO adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'Kampoeng Wifi Sulek Hotspot',
            'alamat' => '2W2Q+RW2, Unnamed Road, Sulek Atas, Sulek, Kec. Tlogosari, Kabupaten Bondowoso, Jawa Timur 68272',
            'deskripsi' => 'Kampoeng Wifi Sulek Hotspot adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'CV. Kemajuan Utama Fiber',
            'alamat' => 'Gunungsari RT 12 / RW 4, Kec. Maesan, Kab. Bondowoso, Jawa timur 68262',
            'deskripsi' => 'CV. Kemajuan Utama Fiber adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

        Mitra::create([
            'name' => 'PT. Megadata',
            'alamat' => '8XGX+JGF, Area Sawah, Talkandang, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur',
            'deskripsi' => 'PT. Megadata adalah perusahaan yang bergerak di bidang telekomunikasi',
        ]);

    }
}
