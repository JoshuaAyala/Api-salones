<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;
use App\Http\Requests\ReservacionRequest;
use Illuminate\Support\Facades\Auth;

class ReservacionController extends Controller
{
    public function index()
    {
        $reservaciones = Reservacion::all();
        return response()->json($reservaciones, 200);
    }

    public function verReservacionesCliente()
    {
        // Obtener las reservaciones del cliente actual
        $reservaciones = Auth::user()->reservaciones()->where('fecha', '>=', Carbon::now())->get();

        // Pasar las reservaciones a la vista
        return $reservaciones;
    }

    public function store(ReservacionRequest $request)
    {
        try{
            Reservacion::create($request->validated());
            return response()->json(['message' => 'Reservación se ha creado exitosamente'], 201);
        }catch(Exception $e){
            return response()->json(['message' => $e], 400);
        }
    }

    public function show($id)
    {
        $salon = Reservacion::find($id);

        if (!$salon) {
            return response()->json(['error' => 'Salón no encontrado'], 404);
        }

        return response()->json($salon);
    }

    public function update(ReservacionRequest $request, $id)
    {
        $reservacion = Reservacion::findOrFail($id);
        if($reservacion){
            $reservacion->update($request->validated());

        return response()->json(['message' => 'La reservación se ha actualizado exitosamente'], 200);
        }else{
            return response()->json(['message' => 'La reservación no existe'], 404);
        }
    }

    public function destroy($id){
        $reservacion = Reservacion::find($id);
        if ($reservacion) {
            $reservacion->delete();
            return response()->json(['message' => 'La reservación se borró exitosamente'], 200);
        } else {
            return response()->json(['message' => 'La reservación no existe'], 404);
        }
    }
}