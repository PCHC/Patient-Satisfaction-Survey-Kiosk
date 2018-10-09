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
        DB::table('locations')->insert([
            [
                'id'         => 1,
                'location'   => 'PCHC',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 2,
                'location'   => 'Brewer Medical Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 3,
                'location'   => 'Dental Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 4,
                'location'   => 'Helen Hunt Health Center - First Floor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 5,
                'location'   => 'Penobscot Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 6,
                'location'   => 'Penobscot Pediatrics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 7,
                'location'   => 'Warren Center / Specialty',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 8,
                'location'   => 'Specialty',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 9,
                'location'   => 'Capehart Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 10,
                'location'   => 'Hope House Health and Living Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 11,
                'location'   => 'Helen Hunt Health Center - Second Floor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 12,
                'location'   => 'Helen Hunt Health Center - Walk-In Care',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 13,
                'location'   => 'Seaport Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 14,
                'location'   => 'Winterport Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 15,
                'location'   => 'Community Care and Geriatrics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 16,
                'location'   => 'Brewer Schools',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 17,
                'location'   => 'Care Management',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 18,
                'location'   => 'Hope House',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 19,
                'location'   => 'Jackman Community Health Center',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'         => 20,
                'location'   => 'Pharmacy',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
