<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests\ServicioRequest;

class ServicioController extends Controller
{

    public function index()
    {
        $servicios = Servicio::all();
        return response()->json($servicios, 200);
    }

    public function store(ServicioRequest $request)
    {
        Servicio::create($request->validated());
        return response()->json(['message' => 'El servicio se ha creado exitosamente'], 201);
    }

    public function update(ServicioRequest $request, $id)
    {
        $servicio = Servicio::find($id);
        if($servicio){
            $servicio->update($request->validated());
            return response()->json(['message' => 'El servicio se ha actualizado exitosamente'], 200);
        }else{
            return response()->json(['message' => 'El servicio no existe'], 404);
        }
        
    }

    public function show($id)
    {
        $servicio = Servicio::find($id);

        if (!$servicio) {
            return response()->json(['error' => 'Servicio no encontrado'], 404);
        }

        return response()->json($servicio);
    }

    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        if ($servicio) {
            $servicio->delete();
            return response()->json(['message' => 'El servicio existe se borró exitosamente'], 200);
        } else {
            return response()->json(['message' => 'El servicio no existe'], 404);
        }
    }
}
