<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;
use App\Models\Editorial;

class LibroSeeder extends Seeder
{
    public function run()
    {
        $editorialesIds = Editorial::pluck('id'); // Obtener todos los IDs de las editoriales

        Libro::factory(10)->create([
            'editorial_id' => $editorialesIds->random(), // Asignar un ID de editorial aleatorio
        ]);
    }
}
