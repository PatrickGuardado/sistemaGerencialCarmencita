<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    // Función para mostrar el rol del usuario
    public function show($id)
    {
        $role = Role::findOrFail($id);

        return response()->json([
            'name' => $role->name,
        ]);
    }
}
