<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class myseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            ['name' => 'bashar', 'password' => '2013*b*B', 'state' => 'Admin', 'email' => 'basgar66629@gmail.com'],
            ['name' => 'abdo', 'password' => '2010*a*A', 'state' => 'Admin', 'email' => 'abd077728@gmail.com'],
        ]);

        DB::table('categories')->insert([
            ['name' => 'قصص الانبياء'],
            ['name' => 'قصص السلف'],
            ['name' => ' كتب أطفال'],
            ['name' => 'كنب لزيادة الخبرة'],
            ['name' => 'كتب عن الاديان '],
            ['name' => ' كتب عن الالحاد'],
        ]);
        
    }
}
