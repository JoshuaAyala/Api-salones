<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservacionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'salon_id' => 'required|exists:salons,id',
            'disponibilidad_id' => 'required|exists:disponibilidads,id',
            'start' => 'required|date|after:now',
            'end' => 'required|date|after:start',
            'servicios' => 'nullable|array',
            'servicios.*' => 'integer|exists:servicios,id',
        ];
    }
}
