<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'blogu i pare',
            'desc' => 'une jam blogu i pare i krijaur per eample te matemaiktes',
        ]);
    }
}

