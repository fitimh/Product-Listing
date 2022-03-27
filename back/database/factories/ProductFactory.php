<?php
namespace Database\Factories;

use App\Models\Product;

use Illuminate\Support\Str;

// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory

{
    protected $model = Product::class;

    public function definition()
    {


        return [

            'title' => $this->faker->sentence(3, true),
            // 'product_img'=> $this->faker->default("hello"),
            'desc' => $this->faker->realText($this->faker->numberBetween(10, 100)),

        ];
    }
}
