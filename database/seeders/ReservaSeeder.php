<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Reserva;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    public function run(): void
    {
        $productos = Producto::all();

        Reserva::factory()
            ->count(25)
            ->create()
            ->each(function ($reserva) use ($productos) {
                $cantidadProductos = random_int(1, 4);

                $productosSeleccionados = $productos
                    ->random($cantidadProductos)
                    ->pluck('id')
                    ->all();

                $reserva->productos()->attach($productosSeleccionados);
            });
    }
}