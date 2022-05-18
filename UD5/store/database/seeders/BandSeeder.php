<?php

namespace Database\Seeders;
use App\Models\Band;
use DB;

use Illuminate\Database\Seeder;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Band::create([
            'name'=>'Ramones',
            'style'=>'punk rock',
            'country'=>'USA'
        ]);
    }
}
