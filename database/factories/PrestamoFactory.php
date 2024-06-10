<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prestamo;
use App\Models\Libro;
class PrestamoFactory extends Factory
{
    protected $model = Prestamo::class;

    public function definition()
    {
        return [
            'libro_id' => rand(1, 10), // Asignación aleatoria de un libro existente
            'usuario_id' => rand(1, 10), // Asignación aleatoria de un usuario existente
            'fecha_inicio' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'fecha_devolucion' => $this->faker->dateTimeBetween('now', '+1 year'),
            'estado' => $this->faker->randomElement(['pendiente', 'devuelto']),
        ];
    }
}

