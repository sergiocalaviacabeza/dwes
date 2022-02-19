<?php

namespace Database\Seeders;
use App\Models\Study;
use DB;

use Illuminate\Database\Seeder;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Study::create([
            'code'=>'IF30',
            'name'=>'Desarrollo web',
            'description'=>'laravel'
        ]);
    }
}
