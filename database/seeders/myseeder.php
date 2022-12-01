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
            ['name' => 'bashar', 'password' => '2013*b*B', 'state' => 'Admin', 'email' => 'bashar66629@gmail.com'],
            ['name' => 'abdo', 'password' => '2010*a*A', 'state' => 'Admin', 'email' => 'abdo77728@gmail.com'],
        ]);

        DB::table('categories')->insert([
            ['name' => ' book1'],
            ['name' => 'book2 '],
            ['name' => ' book3 '],
            ['name' => 'book4  '],
            ['name' => 'book5   '],
            ['name' => ' book6  '],
        ]);

    }
}
