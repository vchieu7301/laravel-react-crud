<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$pv3ygZRiSoPHlwbis2pB6.QWnHfikhElj3TuaUr6DMVZDe2QPBqSu',
            'created_at' => new DateTime(),
        ]);
        
        $this->call(RecordsTableSeeder::class);
    }
}
