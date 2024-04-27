<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
           [
            'name' => 'Room 1',
                'floor' => 1,
                'x' => -9.106,
                'y' => 0.08,
                'z' => 0.122,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Room 2',
                    'floor' => 1,
                    'x' => -6.669,
                    'y' => 0.08,
                    'z' => 0.122,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 3',
                    'floor' => 1,
                    'x' => 7.43,
                    'y' => 0.08,
                    'z' => 2.8816,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 4',
                    'floor' => 1,
                    'x' => 10.439,
                    'y' => 0.08,
                    'z' => -0.039,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 5',
                    'floor' => 1,
                    'x' => -9.461,
                    'y' => 0.08,
                    'z' => -0.62,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 6',
                    'floor' => 1,
                    'x' => -7.525,
                    'y' => 0.951,
                    'z' => 2.865,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 7',
                    'floor' => 1,
                    'x' => 5.214,
                    'y' => 0.08,
                    'z' => -0.742,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 8',
                    'floor' => 1,
                    'x' => 9.678,
                    'y' => 0.08,
                    'z' => -0.764,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
            'name' => 'Room 9',
                'floor' => 2,
                'x' => -8.438,
                'y' => 0.08,
                'z' => -0.62,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Room 10',
                    'floor' => 2,
                    'x' => -4.615,
                    'y' => 0.951,
                    'z' => -0.102,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 11',
                    'floor' => 2,
                    'x' => 0.769,
                    'y' => 0.951,
                    'z' => 0.013,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 12',
                    'floor' => 2,
                    'x' => 7.674,
                    'y' => 0.951,
                    'z' => 2.788,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 13',
                    'floor' => 2,
                    'x' => 7.642,
                    'y' => 0.951,
                    'z' => 0.899,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 14',
                    'floor' => 2,
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 15',
                    'floor' => 2,
                    'x' => 8.389,
                    'y' => 0.951,
                    'z' => -0.473,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 16',
                    'floor' => 2,
                    'x' => -5.167,
                    'y' => 0.951,
                    'z' => 0.417,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Room 17',
                    'floor' => 2,
                    'x' => -9.622,
                    'y' => 0.951,
                    'z' => -0.417,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],

            [
                'name' => 'Room 18',
                    'floor' => 2,
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],

            [
                'name' => 'Room 19',
                    'floor' => 2,
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],

            [
                'name' => 'Room 20',
                    'floor' => 2,
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Market Side, Barangay 9, Malaybalay City',
                    'floor' => 'Not located at City Hall',
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'San Isidro St., Barangay 8, Malaybalay City',
                    'floor' => 'Not located at City Hall',
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Murillo St., Barangay 8, Malaybalay City',
                    'floor' => 'Not located at City Hall',
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Claro M. Recto St., Barangay 1 Malaybalay City',
                    'floor' => 'Not located at City Hall',
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Barangay Casisang, Malaybalay City',
                    'floor' => 'Not located at City Hall',
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Freedom Park, Barangay 4, Malaybalay City',
                    'floor' => 'Not located at City Hall',
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                'name' => 'Empty Room',
                    'floor' => 'To be relocated',
                    'x' => 0,
                    'y' => 0,
                    'z' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
            ],


        ];

        DB::table('locations')->insert($data);
    }
}
