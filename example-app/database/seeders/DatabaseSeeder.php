<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'          => 'test@test.ca',
            'name'     => 'Test Laravel',
            'password'       => Hash::make(env('MASTER_PASSWORD', 'Laravel'))
        ]);
    }
}
