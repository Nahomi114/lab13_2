<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'DNI' => $this->faker->unique()->randomNumber(8),
            'direccion' => $this->faker->address,
        ];
    }
}
