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
            ['name' => ' قصص الانبياء'],
            ['name' => ' قصص السلف'],
            ['name' => 'كتب اطفال'],
            ['name' => 'كتب لزيادة الخبرة'],
            ['name' => 'كتب عن الاديان'],
            ['name' => 'كتب عن الالحاد'],
        ]);

        DB::table('books')->insert([
            ['categories_id' => '1', 'title' => 'اللؤلؤ المكنون', 'Author' => 'مخمد فؤاد', 'pagenumber' => '20','bio'=>'test bio','image'=>'7233b7ed4794380c9efa1509f7a137be.jpg.jpg','price'=>'20','price_with_shiping'=>'2']
        ]);

}
}
