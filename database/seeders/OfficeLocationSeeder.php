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
                'location_id' => 1,
                'office_id' => 10,
            ],
            [
                'location_id' => 2,
                'office_id' => 23,
            ],
            [
                'location_id' => 3,
                'office_id' => 4,
            ],
            [
                'location_id' => 4,
                'office_id' => 6,
            ],
            [
                'location_id' => 5,
                'office_id' => 18,
            ],
            [
                'location_id' => 6,
                'office_id' => 11,
            ],
            [
                'location_id' => 7,
                'office_id' => 24,
            ],
            [
                'location_id' => 8,
                'office_id' => 17,
            ],
            [
                'location_id' => 9,
                'office_id' => 16,
            ],
            [
                'location_id' => 10,
                'office_id' => 2,
            ],
            [
                'location_id' => 11,
                'office_id' => 15,
            ],

            [
                'location_id' => 11,
                'office_id' => 19,
            ],
            [
                'location_id' => 11,
                'office_id' => 20,
            ],
            [
                'location_id' => 12,
                'office_id' => 13,
            ],
            [
                'location_id' => 13,
                'office_id' => 5,
            ],
            [
                'location_id' => 14,
                'office_id' => 21,
            ],

            [
                'location_id' => 14,
                'office_id' => 26,
            ],
            [
                'location_id' => 15,
                'office_id' => 1,
            ],
            [
                'location_id' => 16,
                'office_id' => 22,
            ],
            [
                'location_id' => 17,
                'office_id' => 14,
            ],
            [
                'location_id' => 18,
                'office_id' => 7,
            ],
            [
                'location_id' => 19,
                'office_id' => 27,
            ],
            [
                'location_id' => 20,
                'office_id' => 28,
            ],
            [
                'location_id' => 21,
                'office_id' => 29,
            ],
            [
                'location_id' => 22,
                'office_id' => 3,
            ],
            [
                'location_id' => 22,
                'office_id' => 9,
            ],
            [
                'location_id' => 22,
                'office_id' => 25,
            ],
            [
                'location_id' => 23,
                'office_id' => 12,
            ],

           
        ];
        

        DB::table('office_location_pivots')->insert($data);
    }
}
