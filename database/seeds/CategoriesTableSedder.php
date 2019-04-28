<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=Category::insert([

        		[
        			'name'=>'Electronics',
        			'slug'=>Str::slug('Electronics'),

        		],
        		[
        			'name'=>'Clothes',
        			'slug'=>Str::slug('Clothes'),

        		],

				[
        			'name'=>'Shoes',
        			'slug'=>Str::slug('Shoes'),

        		]


        ]);
    }
}
