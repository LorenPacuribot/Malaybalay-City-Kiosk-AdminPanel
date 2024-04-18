<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'location_id' => 15,
                'name' => 'City Accounting Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-2940',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 10,
                'name' => 'City Administrator Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-4707',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 22,
                'name' => 'City Agriculture Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-1254',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 3,
                'name' => 'City Assessor Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-5704',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 13,
                'name' => 'City Budget Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-5682',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 4,
                'name' => 'City Civil Registrar',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-5816',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 18,
                'name' => 'City Disaster Risk Reduction and Management Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-3611',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => '18',
                'name' => 'City Economic Enterprise Development and Management Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-4759',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 22,
                'name' => 'City Engineer’s Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-1695',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 1,
                'name' => 'City Environment and Natural Resources Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-2977',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 6,
                'name' => 'City General Services Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-5639',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 23,
                'name' => 'City Health Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-0738',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 12,
                'name' => 'City Human Resources Management Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-5545
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 17,
                'name' => 'City Legal Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-4706',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 11,
                'name' => 'City Mayors Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-5643',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 9,
                'name' => 'Bids and Awards Committee',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 8,
                'name' => 'Business Permit and Licensing Division',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 5,
                'name' => 'City Urban Development and Housing Division',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-7121',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 11,
                'name' => 'Public Employment Service Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 11,
                'name' => 'Office of the Senior Citizen Affairs',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 14,
                'name' => 'Office of Building Official',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 16,
                'name' => 'City Planning and Development Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-2754',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 2,
                'name' => 'City Social Welfare and Development Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-3054',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 7,
                'name' => 'City Treasurer’s Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-3772',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 22,
                'name' => 'City Veterinary Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-3205',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 14,
                'name' => 'City Vice Mayors Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 19,
                'name' => 'Acer/ 117',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-4441',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 20,
                'name' => 'City Tourism Office',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-3404',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'location_id' => 21,
                'name' => 'Sangguniang Panlungsod',
                'office_hour' => 'Monday to Friday 8:00 AM – 5:00 PM',
                'contact_information' => '(088)813-4350',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('offices')->insert($data);
    }
}
