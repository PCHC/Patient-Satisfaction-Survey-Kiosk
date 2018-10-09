<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question'   => 'Were you satisfied with your visit today?',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
