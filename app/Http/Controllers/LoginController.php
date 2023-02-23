<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return response()->json(['message' => 'Autenticación exitosa','user' => Auth::user()], 200);
        }

        // Credenciales inválidas
        return response()->json(['message' => 'Credenciales inválidas'], 401);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json(['message' => 'Sesión cerrada correctamente'], 200);
    }
}
