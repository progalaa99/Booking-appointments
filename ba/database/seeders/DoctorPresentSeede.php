<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorPresentSeede extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ifdoctorpresents')->insert([
            [
                'days' => 'Monday',
                'start_time' => '15:00',
                'end_time' => '20:00',
            ],
            [
                'days' => 'Tuesday',
                'start_time' => '15:00',
                'end_time' => '20:00',
            ],
            [
                'days' => 'Tuesday',
                'start_time' => '15:00',
                'end_time' => '20:00',
            ],
            [
                'days' => 'Thursday',
                'start_time' => '15:00',
                'end_time' => '20:00',
            ],
           
           
        ]);
    }
    
}
