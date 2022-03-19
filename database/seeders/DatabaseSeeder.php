<?php

namespace Database\Seeders;

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
        \App\models\Admin::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456789')
        ]);


        \App\models\Agency::create([
            'name' => 'agency3',
            'email' => 'agency3@test.com',
            'password' => Hash::make('123456789'),
            'end_subscription' => '1-1-2023 00:00:00',
            'subscription_month' => 2
        ]);
    }
}
