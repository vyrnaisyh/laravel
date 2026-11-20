<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use FakerRestaurant\Provider\en_US\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_US');
        $faker->addProvider(new Restaurant($faker));

        $now = now();
        $products = [];

        for ($i = 1; $i <= 10; $i++) {
            $products[] = [
                'name_product' => $faker->foodName(),
                'stock_product' => $faker->numberBetween(1, 50),
                'price_product' => $faker->numberBetween(5000, 100000),
                'desc_product' => $faker->sauceName(),
                'id_category' => $faker->numberBetween(1, 3),
                'created_at' => $now,
            ];
        }

        DB::table('products')->insert($products);
    }
}