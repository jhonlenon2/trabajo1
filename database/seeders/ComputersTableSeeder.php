<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Computers; // Asegúrate de usar el nombre correcto

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Computers::create([
            'modelo' => 'Inspiron 15',
            'marca' => 'Dell',
            'tamaño' => '15 pulgadas',
            'codigo' => Str::random(10),
            'sistema_operativo' => 'Windows',
        ]);

        Computers::create([
            'modelo' => 'MacBook Air',
            'marca' => 'Apple',
            'tamaño' => '13 pulgadas',
            'codigo' => Str::random(10),
            'sistema_operativo' => 'macOS',
        ]);

    }
}
