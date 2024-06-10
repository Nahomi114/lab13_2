<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;
class AutorSeeder extends Seeder
{
    public function run()
    {
        // Crear registros de autores
        Autor::factory(10)->create();
    }
}
