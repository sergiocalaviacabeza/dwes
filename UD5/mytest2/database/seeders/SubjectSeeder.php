<?php

namespace Database\Seeders;
use App\Models\Subject;
use DB;

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'id_subject'=>'IZ66',
            'name'=>'English',
            'abreviation'=>'Eng'
        ]);
    }
}
