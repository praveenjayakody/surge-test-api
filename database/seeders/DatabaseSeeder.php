<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //super-admin
        DB::table('users')->insert([
            'name' => "Orpheus Digital",
            'email' => 'admin@orpheus.digital',
            'password' => Hash::make('decrease'),
        ]);
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@lorem.dev',
            'password' => Hash::make('admin123'),
        ]);

        //user
        DB::table('users')->insert([
            'name' => "Jane Doe",
            'email' => 'jane@lorem.dev',
            'password' => Hash::make('jane123'),
        ]);
        DB::table('users')->insert([
            'name' => "Ben James",
            'email' => 'ben@lorem.dev',
            'password' => Hash::make('ben123'),
        ]);
    }
}
