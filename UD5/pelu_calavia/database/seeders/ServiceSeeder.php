<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'code' => 'P01',
            'name' => 'cortar-mujer',
            'details' => 'Cada corte es único y personal',
            'price' => '20',
            'time' => '30'
        ]);

        Service::create([
            'code' => 'P01',
            'name' => 'cortar-mujer',
            'details' => 'Cada corte es único y personal',
            'price' => '20',
            'time' => '30'
        ]);

        Service::create([
            'code' => 'P01',
            'name' => 'cortar-mujer',
            'details' => 'Cada corte es único y personal',
            'price' => '20',
            'time' => '30'
        ]);
    }
}
