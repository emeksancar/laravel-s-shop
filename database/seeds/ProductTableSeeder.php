<?php

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('products')->delete();
        DB::table('product_details')->delete();

        for ($i=0; $i<30; $i++) {
            $product_name = $faker->sentence(2);
            $product = Product::create([
                'product_name' => $product_name,
                'slug' => str_slug($product_name),
                'description' => $faker->sentence(20),
                'product_price' => $faker->randomFloat(3, 1, 20)
            ]);
            $detail = $product->detail()->create([
                'show_slider' => rand(0,1),
                'show_deal_of_the_day' => rand(0,1),
                'show_on_sale' => rand(0,1)
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
