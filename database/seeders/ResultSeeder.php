<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('results')->insert(
            [

                /* SENIN */
                /* IPA 1 */
                [
                    'slot_id' => 1,
                    'init_id' => 37,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 37,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 15,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 15,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 15,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 15,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 10,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 10,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 21,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 21,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 2 */
                [
                    'slot_id' => 1,
                    'init_id' => 12,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 12,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 12,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 12,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 6,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 6,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 19,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 19,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 19,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 19,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 3 */
                [
                    'slot_id' => 1,
                    'init_id' => 26,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 26,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 20,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 20,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 20,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 20,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 12,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 12,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 12,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 12,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /*  IPA 4 */
                [
                    'slot_id' => 1,
                    'init_id' => 19,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 19,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 19,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 19,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 38,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 38,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 10,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 10,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 15,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 15,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 5 */
                [
                    'slot_id' => 1,
                    'init_id' => 15,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 15,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 38,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 38,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 10,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 10,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 15,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 15,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 4,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 4,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 6 */
                [
                    'slot_id' => 1,
                    'init_id' => 35,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 35,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 12,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 12,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 12,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 12,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 7 */
                [
                    'slot_id' => 1,
                    'init_id' => 19,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 19,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 6,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 6,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 14,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 14,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 14,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 8,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 8,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 35,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 8 */
                [
                    'slot_id' => 1,
                    'init_id' => 1,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 1,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 20,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 20,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 26,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 26,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 8,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 8,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 4,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 4,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 9 */
                [
                    'slot_id' => 1,
                    'init_id' => 10,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 10,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 1,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 1,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 1,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 15,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 15,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 15,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 6,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 6,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPS 1 */
                [
                    'slot_id' => 1,
                    'init_id' => 29,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 29,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 29,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 29,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 37,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 37,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 25,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 25,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 23,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 23,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPS 2 */
                [
                    'slot_id' => 1,
                    'init_id' => 21,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 2,
                    'init_id' => 21,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 3,
                    'init_id' => 9,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 4,
                    'init_id' => 9,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 5,
                    'init_id' => 11,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 6,
                    'init_id' => 11,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 7,
                    'init_id' => 32,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 8,
                    'init_id' => 32,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 9,
                    'init_id' => 37,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 10,
                    'init_id' => 37,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* SELASA */
                /* IPA 1 */
                [
                    'slot_id' => 11,
                    'init_id' => 16,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 16,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 16,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 16,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 4,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 4,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 12,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 12,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 12,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 12,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 2 */
                [
                    'slot_id' => 11,
                    'init_id' => 15,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 15,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 15,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 15,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 14,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 14,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 14,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 18,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 18,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 18,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /*  IPA 3 */
                [
                    'slot_id' => 11,
                    'init_id' => 35,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 35,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 35,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 35,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 1,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 1,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 6,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 6,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 15,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 15,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /*  IPA 4 */
                [
                    'slot_id' => 11,
                    'init_id' => 26,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 26,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 18,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 18,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 18,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 18,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 17,
                    'init_id' => 21,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 18,
                    'init_id' => 21,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 36,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 36,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 5 */
                [
                    'slot_id' => 11,
                    'init_id' => 40,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 40,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 12,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 12,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 12,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 12,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 8,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 8,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 26,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 26,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /*  IPA 6 */
                [
                    'slot_id' => 11,
                    'init_id' => 19,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 19,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 19,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 38,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 38,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' =>  16,
                    'init_id' => 41,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 41,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 14,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 14,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' =>  20,
                    'init_id' => 14,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 7 */
                [
                    'slot_id' => 11,
                    'init_id' => 12,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 12,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 12,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 12,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 21,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 21,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 18,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 18,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 18,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 18,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 8 */
                [
                    'slot_id' => 11,
                    'init_id' => 18,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 18,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 18,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 18,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 38,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 38,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 16,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 16,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 16,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 16,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 9 */
                [
                    'slot_id' => 11,
                    'init_id' => 1,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 1,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 26,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 26,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 40,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 40,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 4,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 4,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 4,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 4,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPS 1 */
                [
                    'slot_id' => 11,
                    'init_id' => 3,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 3,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 39,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 39,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 7,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 7,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 32,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 32,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 34,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 34,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPS 2 */
                [
                    'slot_id' => 11,
                    'init_id' => 29,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 12,
                    'init_id' => 29,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 13,
                    'init_id' => 2,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 14,
                    'init_id' => 2,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 15,
                    'init_id' => 33,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 16,
                    'init_id' => 33,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 17,
                    'init_id' => 33,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 18,
                    'init_id' => 13,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 19,
                    'init_id' => 13,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 20,
                    'init_id' => 13,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /* RABU */
                /* IPA 1 */
                [
                    'slot_id' => 21,
                    'init_id' => 6,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 6,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 18,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 26,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 26,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 30,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 30,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 14,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 14,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 14,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 2 */
                [
                    'slot_id' => 21,
                    'init_id' => 38,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 38,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 40,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 40,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 8,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 8,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 20,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 20,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 20,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 20,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /*  IPA 3 */
                [
                    'slot_id' => 21,
                    'init_id' => 14,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 14,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 14,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 16,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 16,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 16,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 19,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 19,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 19,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 19,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /*  IPA 4 */
                [
                    'slot_id' => 21,
                    'init_id' => 20,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 20,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 20,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 20,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 4,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 4,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 27,
                    'init_id' => 16,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 28,
                    'init_id' => 16,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 16,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 16,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 5 */
                [
                    'slot_id' => 21,
                    'init_id' => 16,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 16,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 16,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 16,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 21,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 21,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 20,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 20,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 20,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 20,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /*  IPA 6 */
                [
                    'slot_id' => 21,
                    'init_id' => 40,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 40,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 20,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 20,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 20,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' =>  26,
                    'init_id' => 20,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 21,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 21,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 26,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' =>  30,
                    'init_id' => 26,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 7 */
                [
                    'slot_id' => 21,
                    'init_id' => 1,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 1,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 40,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 40,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' =>  26,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 16,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 10,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' =>  30,
                    'init_id' => 10,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 8 */
                [
                    'slot_id' => 21,
                    'init_id' => 19,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 19,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 19,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 19,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 6,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 6,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 10,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 10,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 20,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 20,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPA 9 */
                [
                    'slot_id' => 21,
                    'init_id' => 8,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 8,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 12,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 12,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 12,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 12,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 18,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 18,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 18,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 18,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPS 1 */
                [
                    'slot_id' => 21,
                    'init_id' => 13,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 13,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 13,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 22,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 22,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 17,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 17,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 17,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 17,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 27,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /*  IPS 2 */
                [
                    'slot_id' => 21,
                    'init_id' => 41,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 22,
                    'init_id' => 41,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 23,
                    'init_id' => 27,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 24,
                    'init_id' => 27,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 25,
                    'init_id' => 27,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 26,
                    'init_id' => 27,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 27,
                    'init_id' => 25,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 28,
                    'init_id' => 25,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 29,
                    'init_id' => 11,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 30,
                    'init_id' => 11,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* KAMIS */
                /* IPA 1 */
                [
                    'slot_id' => 59,
                    'init_id' => 40,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 40,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 4,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 4,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 19,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 19,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 20,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 20,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 20,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 20,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /* IPA 2 */
                [
                    'slot_id' => 59,
                    'init_id' => 30,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 30,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 36,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 36,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 4,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 4,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 16,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 16,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 16,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 16,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 3 */
                [
                    'slot_id' => 59,
                    'init_id' => 4,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 4,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 10,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 10,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 15,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 15,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 18,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 18,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 18,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 18,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 4 */
                [
                    'slot_id' => 59,
                    'init_id' => 8,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 8,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 35,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 35,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 35,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 35,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 12,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 12,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 12,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 12,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 5 */
                [
                    'slot_id' => 59,
                    'init_id' => 6,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 6,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 19,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 19,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 19,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 19,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 30,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 30,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 36,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 36,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 6 */
                [
                    'slot_id' => 59,
                    'init_id' => 15,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 15,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 35,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 35,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 36,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 36,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 10,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 10,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 4,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 4,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 7 */
                [
                    'slot_id' => 59,
                    'init_id' => 20,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 20,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 20,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 20,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 4,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 4,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 26,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 26,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 19,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 19,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 8 */
                [
                    'slot_id' => 59,
                    'init_id' => 40,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 40,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 12,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 12,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 12,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 12,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 15,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 15,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 15,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 15,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 9 */
                [
                    'slot_id' => 59,
                    'init_id' => 8,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 8,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 21,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 21,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 1,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 1,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 20,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 20,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 20,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 20,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPs 1 */
                [
                    'slot_id' => 59,
                    'init_id' => 11,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 11,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 11,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 11,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 2,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 2,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 28,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 28,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 28,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 28,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPs 2*/
                [
                    'slot_id' => 59,
                    'init_id' => 28,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 32,
                    'init_id' => 28,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 33,
                    'init_id' => 28,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 60,
                    'init_id' => 28,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 34,
                    'init_id' => 7,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 35,
                    'init_id' => 15,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 36,
                    'init_id' => 15,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 37,
                    'init_id' => 33,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 38,
                    'init_id' => 5,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 39,
                    'init_id' => 5,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                // jumat
                /* IPA 1 */
                [
                    'slot_id' => 40,
                    'init_id' => 18,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 18,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 18,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 8,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 8,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 2 */
                [
                    'slot_id' => 40,
                    'init_id' => 21,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 21,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 10,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 10,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 18,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 3 */
                [
                    'slot_id' => 40,
                    'init_id' => 16,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 8,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 8,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 21,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 21,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 4 */
                [
                    'slot_id' => 40,
                    'init_id' => 14,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 14,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 14,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 15,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 15,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 5 */
                [
                    'slot_id' => 40,
                    'init_id' => 38,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 38,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 18,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 18,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 18,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 6 */
                [
                    'slot_id' => 40,
                    'init_id' => 19,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 18,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 18,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 38,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 38,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 7 */
                [
                    'slot_id' => 40,
                    'init_id' => 35,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 35,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 35,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 16,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 16,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 8 */
                [
                    'slot_id' => 40,
                    'init_id' => 21,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 21,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 14,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 14,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 14,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 9 */
                [
                    'slot_id' => 40,
                    'init_id' => 15,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 36,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 36,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 38,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 38,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /* IPs 1 */
                [
                    'slot_id' => 40,
                    'init_id' => 27,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 27,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 27,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 33,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 33,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPs 2 */
                [
                    'slot_id' => 40,
                    'init_id' => 39,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 41,
                    'init_id' => 39,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 42,
                    'init_id' => 3,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 43,
                    'init_id' => 3,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 44,
                    'init_id' => 28,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 45,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 46,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 47,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 48,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* sabtu */
                /* IPA 1 */
                [
                    'slot_id' => 49,
                    'init_id' => 38,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 38,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 30,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 30,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 19,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 19,
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 2 */
                [
                    'slot_id' => 49,
                    'init_id' => 26,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 26,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 1,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 1,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 30,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 30,
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /* IPA 3*/
                [
                    'slot_id' => 49,
                    'init_id' => 36,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 36,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 40,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 40,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 38,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 38,
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 4 */
                [
                    'slot_id' => 49,
                    'init_id' => 6,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 6,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 40,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 40,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 1,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 1,
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 5 */
                [
                    'slot_id' => 49,
                    'init_id' => 1,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 1,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 24,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 24,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 30,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 30,
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 6 */
                [
                    'slot_id' => 49,
                    'init_id' => 15,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 15,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 6,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 6,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 8,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 8,
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 7 */
                [
                    'slot_id' => 49,
                    'init_id' => 16,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 16,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 36,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 36,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 38,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 38,
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 7,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPA 8 */
                [
                    'slot_id' => 49,
                    'init_id' => 30,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 30,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 30,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 30,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 36,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 36,
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 8,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


                /* IPA 9 */
                [
                    'slot_id' => 49,
                    'init_id' => 14,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 14,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 14,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 10,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 10,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 10,
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 9,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                /* IPs 1  */
                [
                    'slot_id' => 49,
                    'init_id' => 33,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 33,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 9,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 9,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 41,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 41,
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                /* IPS 2 */
                [
                    'slot_id' => 49,
                    'init_id' => 29,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 50,
                    'init_id' => 29,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 51,
                    'init_id' => 22,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 52,
                    'init_id' => 22,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 53,
                    'init_id' => 34,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 54,
                    'init_id' => 34,
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

                [
                    'slot_id' => 55,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 56,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 57,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'slot_id' => 58,
                    'init_id' => 'EKSKUL',
                    'kelas_id' => 11,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
            ]
        );
    }
}
