<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(
            [
                'location'   => 'PCHC',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Brewer Medical Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Dental Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Helen Hunt Health Center - First Floor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Penobscot Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Penobscot Pediatrics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Warren Center / Specialty',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Specialty',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Capehart Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Hope House Health and Living Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Helen Hunt Health Center - Second Floor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Helen Hunt Health Center - Walk-In Care',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Seaport Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Winterport Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Community Care and Geriatrics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Brewer Schools',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Care Management',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Hope House',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Jackman Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'location'   => 'Pharmacy',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
