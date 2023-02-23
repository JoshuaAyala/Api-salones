<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disponibilidad;
use App\Http\Requests\DisponibilidadRequest;

class DisponibilidadController extends Controller
{
    public function index()
    {
        $disponibilidades = Disponibilidad::all();
        return response()->json($disponibilidades, 200);
    }

    public function store(DisponibilidadRequest $request)
    {
        try{
            Disponibilidad::create($request->validated());
            return response()->json(['message' => 'La disponibilidad se ha creado exitosamente'], 201);
        }catch(Exception $e){
            return response()->json(['message' => $e], 404);
        }
    }

    // Mostrar la disponibilidad con el id especificado
    public function show($id)
    {
        $disponibilidad = Disponibilidad::find($id);
        if (!$disponibilidad) {
            return response()->json(['error' => 'Disponibilidad no encontrada'], 404);
        }
        return response()->json($disponibilidad);
    }

    // Actualizar la disponibilidad con el id especificado en la base de datos
    public function update(DisponibilidadRequest $request, $id)
    {
        $disponibilidad = Disponibilidad::find($id);
        if($disponibilidad){
            $disponibilidad->update($request->validated());

        return response()->json(['message' => 'La disponibilidad se ha actualizado exitosamente'], 200);
        }else{
            return response()->json(['message' => 'La disponibilidad no existe'], 404);
        }
    }

    // Eliminar la disponibilidad con el id especificado de la base de datos
    public function destroy($id)
    {
        $disponibilidad = Disponibilidad::find($id);
        if ($disponibilidad) {
            $disponibilidad->delete();
            return response()->json(['message' => 'La disponibilidad se borró exitosamente'], 200);
        } else {
            return response()->json(['message' => 'La disponibilidad no existe'], 404);
        }
    }
}
