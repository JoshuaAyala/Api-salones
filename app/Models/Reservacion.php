<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'salon_id',
        'disponibilidad_id',
        'start',
        'end',
        'servicios',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function disponibilidad()
    {
        return $this->belongsTo(Disponibilidad::class);
    }
}