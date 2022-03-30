<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       User::create([
           'firstname' => 'Fitim',
           'lastname' => 'Hoti',
           'email' => 'fitim@hoti.com',
           'password' => Hash::make('secret'),
           'gender' => 'male',
           'phone' => '044100200',
           'adresa' => 'prishtine',
           'birthday' => '1999-02-05',
           'role' => 1
       ]);
    }
}
