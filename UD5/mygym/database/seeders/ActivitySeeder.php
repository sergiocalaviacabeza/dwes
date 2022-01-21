<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'name' => 'Pilates',
            'description' => 'Actividad Relax',
            'duration' => '45',
            'maximum' => '30'
        ]);
    }
}
