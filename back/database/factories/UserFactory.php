<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
//     protected $model = User::class;

     public function definition()
     {
         return [
             'firstname' => $this->faker->firstname(),
             'lastname' => $this->faker->lastname(),
           
             'email' => $this->faker->unique()->safeEmail(),
             'email_verified_at' => now(),
             'password' => Hash::make('secret'),
             'remember_token' => Str::random(10),
             'role' => 1,
         ];
     }
//
//    public function unverified()
//    {
//        return $this->state(function (array $attributes) {
//            return [
//                'email_verified_at' => null,
//            ];
//        });
//    }
}

