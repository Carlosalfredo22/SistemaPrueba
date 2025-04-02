<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambia esto si usas permisos
    }

    public function rules()
    {
        $id = $this->route('role'); // Obtiene el ID en caso de update
        return [
            'nombre' => 'required|string|max:50|unique:roles,nombre,' . $id,
            'descripcion' => 'nullable|string',
        ];
    }
}
