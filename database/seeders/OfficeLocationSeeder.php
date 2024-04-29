<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficeLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'location_id' => 15,
                'office_id' => 1 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 10,
                'office_id' => 2 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 22,
                'office_id' =>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 3,
                'office_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 13,
                'office_id' =>5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 4,
                'office_id' =>6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 18,
                'office_id' =>7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 18,
                'office_id' =>8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 22,
                'office_id' =>9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 1,
                'office_id' =>10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 6,
                'office_id' =>11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 23,
                'office_id' =>12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 12,
                'office_id' =>13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 17,
                'office_id' =>14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 11,
                'office_id' =>15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 9,
                'office_id' =>16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 8,
                'office_id' =>17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 5,
                'office_id' =>18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 11,
                'office_id' =>19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 11,
                'office_id' =>20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 14,
                'office_id' =>21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 16,
                'office_id' =>22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 2,
                'office_id' =>23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 7,
                'office_id' =>24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 22,
                'office_id' =>25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 14,
                'office_id' =>26,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 19,
                'office_id' =>27,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 20,
                'office_id' =>28,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 21,
                'office_id' =>29,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('office_location_pivots')->insert($data);
    }
}
