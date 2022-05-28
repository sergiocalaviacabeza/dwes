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
           'name' => 'RecordStore',
           'address' =>'C/La Música 20',
           'city'=> 'Madrid',
           'email' => 'recordstore@gmail.com',
           'password'=>'recordstore@gmail.com',
           'role' => 'admin' 
        ]);

        User::create([
            'name' => 'Juan',
            'address' =>'C/Paseo 10 - 1º',
            'city'=> 'Zaragoza',
            'email' => 'juan@gmail.com',
            'password'=>'juan@gmail.com',
            'role' => 'client' 
         ]);
        

    }
}
