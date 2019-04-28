<?php

use Illuminate\Database\Seeder;
use App\models\Product;
use Faker\Factory;

class ProductsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([

        		[
        			'name'=>'MacBook',
        			'slug'=>Str::slug('MacBook'),
        			'description'=>'this is description',
        			'quantity'=>'5',
        			'price'=>500,
        			'category_id'=>'1'

        		],[
        			'name'=>'Shoes',
        			'slug'=>Str::slug('Shoes'),
        			'description'=>'this is description',
        			'quantity'=>'5',
        			'price'=>1000,
        			'category_id'=>'2'

        		],[
        			'name'=>'clothes',
        			'slug'=>Str::slug('clothes'),
        			'description'=>'this is description',
        			'quantity'=>'5',
        			'price'=>1000,
        			'category_id'=>'3'

        		]

        ]);

        $faker=Factory::create();

        $Product=Product::find(1);

        $Product->photos()->create(['image'=> $faker->imageUrl()]);

        $Product=Product::find(2);

        $Product->photos()->create(['image'=> $faker->imageUrl()]);


        $Product=Product::find(3);

        $Product->photos()->create(['image'=> $faker->imageUrl()]);

        



    }
}
