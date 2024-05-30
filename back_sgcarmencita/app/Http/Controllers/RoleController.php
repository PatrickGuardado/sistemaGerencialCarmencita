<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Función para mostrar el rol del usuario
    public function role(Request $request)
    {
        return response()->json(['role' => $request->user()->role]);
    }
}
