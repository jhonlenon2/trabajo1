<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Llama al seeder de ComputersTableSeeder
        $this->call(ComputersTableSeeder::class);

        // \App\Models\User::factory(10)->create();
        //$this->call(CategoryTableSeeder::class);
        \App\Models\Category::factory(20)->create();
    }
}
