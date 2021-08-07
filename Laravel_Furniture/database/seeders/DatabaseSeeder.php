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
        // \App\Models\User::factory(10)->create();
        \DB::table('admins')->insert([
            'name' => 'BrianTran',
            'email' => 'admin@gmail.com',
            'phone' => '0975975135',
            'password' => Hash::make('12345'),
        ]);
    }
}
