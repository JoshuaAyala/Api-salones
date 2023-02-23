<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'capacity',
        'hour_price',
    ];

    public function disponibilidades()
    {
        return $this->hasMany(Disponibilidad::class);
    }
}