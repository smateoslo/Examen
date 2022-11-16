<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_nacimento',
        'numero_licencia',
        'victorias',
        'escuderia_id',
    ];
}
