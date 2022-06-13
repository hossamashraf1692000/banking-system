<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'hossam',
            'email' => 'hossam@test.com' ,
            'current_balance' => '10000'
        ]);

        User::create([
            'name' => 'hassen',
            'email' => 'hassen@test.com' ,
            'current_balance' => '90000'
        ]);

        User::create([
            'name' => 'ahmed',
            'email' => 'ahmed@test.com' ,
            'current_balance' => '6000'
        ]);

        User::create([
            'name' => 'mohmaed',
            'email' => 'mohmaed@test.com' ,
            'current_balance' => '40000'
        ]);

        User::create([
            'name' => 'eslam',
            'email' => 'eslam@test.com' ,
            'current_balance' => '30000'
        ]);

        User::create([
            'name' => 'abdo',
            'email' => 'abdo@test.com' ,
            'current_balance' => '50000'
        ]);

        User::create([
            'name' => 'hazem',
            'email' => 'hazem@test.com' ,
            'current_balance' => '5000'
        ]);

        User::create([
            'name' => 'mahmoud',
            'email' => 'mahmoud@test.com' ,
            'current_balance' => '80000'
        ]);
        User::create([
            'name' => 'sara',
            'email' => 'sara@test.com' ,
            'current_balance' => '40000'
        ]);
        User::create([
            'name' => 'salama',
            'email' => 'salama@test.com' ,
            'current_balance' => '4000'
        ]);
        User::create([
            'name' => 'marwa',
            'email' => 'mahmoud@test.com' ,
            'current_balance' => '10000'
        ]);
        User::create([
            'name' => 'mostafa',
            'email' => 'mostafa@test.com' ,
            'current_balance' => '17000'
        ]);
    }
}
