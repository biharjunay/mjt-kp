<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

 class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $hak = [
        //     ['id' => 1, 'hak_akses' => 'pengguna'],
        //     ['id' => 2, 'hak_akses' => 'pemesan'],
        //     ['id' => 3, 'hak_akses' => 'pelamar'],
        //     ['id' => 4, 'hak_akses' => 'admin'],
        //     ['id' => 5, 'hak_akses' => 'owner'],
        // ];
        // DB::table('hak_akses')->insert($hak);
        DB::table('layanan')->insert([
            ['id' => 1, 'layanan' => 'instalasi lte', 'deskripsi' => 'Pemasangan perangkat jaringan antena 3G/4G/5G pada tower BTS.'],
            ['id' => 2, 'layanan' => 'INSTALASI MICROWAVE', 'deskripsi' => 'Pemasangan perangkat transmisi radio untuk menghubungkan antara BTS (Base Tranceiver Station) ke BSC (Base System Control).'],
            ['id' => 3, 'layanan' => 'take data', 'deskripsi' => 'Pengambilan data instalasi sebagai bentuk validasi instalasi jaringan BTS.'],
            ['id' => 4, 'layanan' => 'TROUBLE SHOOTER', 'deskripsi' => 'Melakukan maintenance jaringan BTS secara berkala dan pada BTS yang bermasalah.'],
        ]);
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'jojo', 'email' => 'jojo@test.com', 'password' => Hash::make('rahasia'), 'role' => 'admin'],
            ['id' => 2, 'name' => 'roy', 'email' => 'roy@test.com', 'password' => Hash::make('rahasia'), 'role' => 'pengunjung'],
            ['id' => 3, 'name' => 'alan', 'email' => 'alan@test.com', 'password' => Hash::make('rahasia'), 'role' => 'owner']
        ]);
        DB::table('portfolio')->insert([
            ['id' => 1, 'name' => 'indosat', 'image' => '1689079279_indosat.jpg'],
            ['id' => 2, 'name' => 'tri', 'image' => '1689079309_tri.jpg'],
            ['id' => 3, 'name' => 'Telkomsel', 'image' => '1689079352_Telkomsel.jpg'],
            ['id' => 4, 'name' => 'smartfren', 'image' => '1689079369_smartfren.png'],
        ]);
        DB::table('kategori_pekerjaan')->insert([
            ['id' => 1, 'kategori_pekerjaan' => 'engineer'],
            ['id' => 2, 'kategori_pekerjaan' => 'rigger'],
            ['id' => 3, 'kategori_pekerjaan' => 'driver'],
        ]);
    }
}
