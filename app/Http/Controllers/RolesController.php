<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RolesController extends Controller
{
    public function index()
    {
        return response()->json(Roles::all(), 200);
    }

    public function store(RoleRequest $request)
    {
        $role = Roles::create($request->validated());
        return response()->json($role, 201);
    }

    public function show($id)
    {
        try {
            return response()->json(Roles::findOrFail($id), 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Rol no encontrado'], 404);
        }
    }

    public function update(RoleRequest $request, $id)
    {
        try {
            $role = Roles::findOrFail($id);
            $role->update($request->validated());
            return response()->json($role, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Rol no encontrado'], 404);
        }
    }

    public function destroy($id)
    {
        try {
            $role = Roles::findOrFail($id);
            $role->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Rol no encontrado'], 404);
        }
    }
}
