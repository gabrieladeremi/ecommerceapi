<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('products')->insert([
//            'name' => $faker->word,
//            'detail' => $faker->paragraph,
//            'price' => $faker->numberBetween(100, 1000),
//            'stock' => $faker->randomDigit(),
//            'discount' => $faker->numberBetween(2, 30)
//        ]);
    }
}
