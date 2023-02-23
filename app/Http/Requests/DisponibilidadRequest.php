<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisponibilidadRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'salon_id' => 'required|exists:salons,id',
            'start' => 'required|date|after:now',
            'end' => 'required|date|after:start',
        ];
    }
}
