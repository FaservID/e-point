<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Teacher extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        DB::table('teachers')->insert(
            [
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Sultan Firdaus Pane',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Fatmawati',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Heniati',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Nurijah',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Amirudin',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Dewi Asma',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'H. Amrizal',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Roihannah, S.pd, M.pd',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Yuswita',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'DRS. Dani M,p.d',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Nurfikah Putri S.T',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Sri Bungowati S.P, M.si',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Ririn Apriani S.pd',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Ayu Oktaria Sari S.Kom',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Adiamar S.pd',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Samsudin',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Sri Gustiani S.SOS',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'nip' => rand(0, 999999999999),
                    'nama' => 'Nur Meli, S.pd',
                    'nomor_handphone' => $faker->phoneNumber(),
                    'alamat' => $faker->address(),
                    'jabatan' => $faker->jobTitle(),
                    'jumlah_ampuh' => $faker->numberBetween(2, 15),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
            ]
        );
    }
}
