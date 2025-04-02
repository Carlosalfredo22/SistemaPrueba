<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;

    // Especificar los campos que pueden ser asignados masivamente
    protected $fillable = ['nombre', 'descripcion'];

    // Si deseas especificar que la tabla se llama 'roles' (Laravel lo detecta automáticamente por convención)
    // protected $table = 'roles';
}
