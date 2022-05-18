<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Record;
use DB;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::create([
            'title'=>'Agotados de Esperar el fin',
            'code'=>'EPIC-28004',
            'year'=>'1984',
            'format'=>'LP',
            'condition'=>'mint',
            'price'=>'20 €'
        ]);
    }
}
