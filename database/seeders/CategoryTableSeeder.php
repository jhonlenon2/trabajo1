<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Limpieza',
            'description' => 'Productos como detergentes, etc.'
        ]);
        //factory(App\Models\Category::class,50)->create();
    }
}
