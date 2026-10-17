<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cliente',
        'email',
        'telefono',
        'fecha',
        'hora',
        'cantidad_personas',
        'observaciones',
    ];

    protected function casts(): array
    {
        return [
            'fecha' => 'date',
            'cantidad_personas' => 'integer',
        ];
    }

    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class);
    }
}