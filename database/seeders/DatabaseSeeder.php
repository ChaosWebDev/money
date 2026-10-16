<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Config;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Config::create([
            'key' => 'version',
            'value' => '2.2.2'
        ]);


        $this->call([
            UserSeeder::class,
        ]);
    }
}
