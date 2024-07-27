<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kelas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert(
            [
                [
                    'kelas' => 'XI IPA 1',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 2',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 3',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 4',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 5',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 6',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 7',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 8',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPA 9',
                    'status' => '11',
                    'jurusan' => 'IPA',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPS 1',
                    'status' => '11',
                    'jurusan' => 'IPS',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kelas' => 'XI IPS 2',
                    'status' => '11',
                    'jurusan' => 'IPS',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
            ]
        );
    }
}
