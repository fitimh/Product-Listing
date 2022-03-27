<?php

namespace Database\Seeders;


use App\Models\Product;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(User::count()) {
            return;
        }
        User::create([
            'firstname'=> 'Admin',
            'lastname' => 'admin',
            'gender'=> 'male',
            'phone' => "044100200",
            'email' => 'admin@test.com',
            'adresa'=> "prishtine",
            'birthday' => "1998-02-03",
            'password' => Hash::make('admin'),
            'role' => 2
        ]);
        User::factory(10)->create();


        Product::factory(10)->create();

        // $this->call([UserSeeder::class,
                    //  PostSeeder::class]); // qikjo osht mrena folderit seeders

    }
}
