<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salon;
use App\Http\Requests\SalonRequest;

class SalonController extends Controller
{
    public function index()
    {
        $salones = Salon::all();
        return response()->json($salones, 200);
    }

    public function store(SalonRequest $request)
    {
        try{
            Salon::create($request->validated());
            return response()->json(['message' => 'El salón se ha creado exitosamente'], 201);
        }catch(Exception $e){
            return response()->json(['message' => $e], 400);
        }
    }

    public function show($id)
    {
        $salon = Salon::find($id);

        if (!$salon) {
            return response()->json(['error' => 'Salón no encontrado'], 404);
        }

        return response()->json($salon);
    }

    public function update(SalonRequest $request, $id)
    {
        $salon = Salon::find($id);
        if($salon){
            $salon->update($request->validated());

        return response()->json(['message' => 'El salón se ha actualizado exitosamente'], 200);
        }else{
            return response()->json(['message' => 'El salón no existe'], 404);
        }
    }

    public function destroy($id)
    {
        $salon = Salon::find($id);
        if ($salon) {
            $salon->delete();
            return response()->json(['message' => 'El salón se borró exitosamente'], 200);
        } else {
            return response()->json(['message' => 'El salón no existe'], 404);
        }
    }
}
