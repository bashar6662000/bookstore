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
            ['name' => 'cat1'],
            ['name' => 'cat2'],
            ['name' => 'cat3'],
            ['name' => 'cat4'],
            ['name' => 'cat5'],
            ['name' => 'cat6'],
        ]);


        DB::table('books')->insert([
['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],
['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],

['categories_id'=>'4','title'=>'Rich dad poor dad','Author'=>'test author','pagenumber'=>'40','bio'=>'test bio','image'=>'GG.jpg','price'=>'50'],
        ]);
    }
}
