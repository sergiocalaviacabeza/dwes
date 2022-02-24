<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name'=>'rafa',
            'mail'=>'rafa@dw.es',
            'password'=>'secret',
            'role'=>'cliente',
            'service_date'=>'2022-02-18',
            'service_id'=>1
        ]);

        User::create([
            'name'=>'ester',
            'mail'=>'ester@dw.es',
            'password'=>'secret',
            'role'=>'cliente',
            'service_date'=>'2022-02-18',
            'service_id'=>1
        ]);

        User::create([
            'name'=>'santi',
            'mail'=>'santi@dw.es',
            'password'=>'secret',
            'role'=>'trabajador',
            'service_date'=>'2022-02-18',
            'service_id'=>1
        ]);
    }
}
