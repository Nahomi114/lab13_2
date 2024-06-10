<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;
class LibroFactory extends Factory
{
    protected $model = Libro::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'año' => $this->faker->year,
            'autor_id' => rand(1, 10), // O cualquier lógica para asignar un autor existente
            'editorial_id' => $this->faker->randomElement([1, 2, 3]), // IDs de editoriales existentes en tu base de datos
        ];
    }
}
