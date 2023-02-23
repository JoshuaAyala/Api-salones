<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Contracts\Auth\Authenticatable;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users, 200);;
    }

    public function store(UserRequest $request)
    {
        try{
            User::create($request->validated());
            return response()->json(['message' => 'El usuario se ha creado exitosamente'], 201);
        }catch(Exception $e){
            return response()->json(['message' => $e], 400);
        }
        
    }


    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        if($user){
            $user->update($request->validated());
            return response()->json(['message' => 'El usuario se ha actualizado exitosamente'], 200);
        }else{
            return response()->json(['message' => 'El usuario no existe'], 404);
        }        
    }

    public function destroy($id)
    {
/*         if (Auth::user()->role !== 'admin') {
            return redirect()->route('acceso-denegado');
        } */
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['message' => 'El usuario existe se borró exitosamente'], 200);
        } else {
            return response()->json(['message' => 'El usuario no existe'], 404);
        }

        
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        return response()->json($user);
    }

}
