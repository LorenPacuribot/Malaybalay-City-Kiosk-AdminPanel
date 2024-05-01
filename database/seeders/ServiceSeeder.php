<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        // Read JSON file
        $json = file_get_contents(database_path('seeds/services.json'));
        $services = json_decode($json, true);

        // Seed database with JSON data
        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }
    }
}
