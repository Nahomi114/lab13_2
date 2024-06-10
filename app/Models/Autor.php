<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    // Especifica la tabla asociada con el modelo
    protected $table = 'autores';

    // Especifica los campos que son asignables en masa
    protected $fillable = [
        'nombre',
    ];

    // Si el autor tiene una relación con libros, puedes definirla aquí
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
