<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\image;
use Illuminate\Database\Seeder;
use Database\Seeders\adminsTableseeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            adminsTableseeder::class,
            DoctorTableSeeder::class,
            ImageTableSeeder::class,
        ]);
    }
}
