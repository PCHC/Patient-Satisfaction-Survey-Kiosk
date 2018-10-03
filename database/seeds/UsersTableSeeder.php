<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              => env('ADMIN_USER_NAME', 'Admin'),
            'email'             => env('ADMIN_USER_EMAIL', 'admin@pchc.com'),
            'password'          => bcrypt( env('ADMIN_USER_PASSWORD', 'admin1') ),
            'remember_token'    => str_random(64),
            'created_at'        => now(),
            'updated_at'        => now(),
            'email_verified_at' => now()
        ]);
    }
}
