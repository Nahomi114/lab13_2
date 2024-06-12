<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'año',
        'autor_id',
        'editorial_id',
    ];

    /**
     * Get the author that owns the book.
     */
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    /**
     * Get the editorial that owns the book.
     */
    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }
}
