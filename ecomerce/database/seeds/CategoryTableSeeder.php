<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use mercado\Category;
use Faker\Factory as Faker;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = array(
            [
                'name' => 'Super heroes', 
                'slug' => 'super-heroes', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'color' => '#440022'
            ],
            [
                'name' => 'Geek', 
                'slug' => 'geek', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'color' => '#445500'
            ]
        );
 
        DB::table('categories')->insert($data);
    }
} 