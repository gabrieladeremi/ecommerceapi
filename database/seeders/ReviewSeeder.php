<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
//        DB::table('reviews')->insert([
//            'product_id' => function(){
//                return Product::all()->random();
//            },
//            'name' => $faker->name,
//            'review' => $faker->paragraph,
//            'star' => $faker->numberBetween(0, 5),
//        ]);
    }
}
