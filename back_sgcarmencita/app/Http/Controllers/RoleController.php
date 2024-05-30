<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    // Función para mostrar el nombre de rol del usuario
    public function show($id)
    {
        $role = Role::find($id);

        if ($role === null) {
            return response()->json(['error' => 'Role not found'], 404);
        }

        return response()->json(['role' => $role->name]);
    }
    
}
