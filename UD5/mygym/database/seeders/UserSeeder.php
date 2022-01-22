<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'dni' => '17520350K',
            'name' => 'Juan Pérez Gómez',
            'email' => 'juan@gmail.com',
            'password' => 'alumno',
            'weight' => '75',
            'height' => '1,75',
            'birthday' => '2000/12/12',
            'sex' => 'Masculino'
        ]);
    }
}
