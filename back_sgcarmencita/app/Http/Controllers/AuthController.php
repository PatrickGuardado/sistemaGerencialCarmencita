<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    
    public function login(Request $request) {
        // Validate request
        $credentials = $request->only('email', 'password');
        // Check credentials
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken('auth_token')->plainTextToken;
            // Return token
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }
        // Return error if credentials are incorrect
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    public function userInfo(Request $request) {
        return response()->json($request->user());
    }

    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
