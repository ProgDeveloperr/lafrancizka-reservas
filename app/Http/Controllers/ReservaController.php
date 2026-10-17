<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('productos')
            ->orderBy('fecha')
            ->orderBy('hora')
            ->get();

        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $productos = Producto::orderBy('categoria')
            ->orderBy('nombre')
            ->get();

        return view('reservas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre_cliente' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'fecha' => ['required', 'date', 'after_or_equal:today'],
            'hora' => ['required'],
            'cantidad_personas' => ['required', 'integer', 'between:1,10'],
            'observaciones' => ['nullable', 'string'],
            'productos' => ['required', 'array', 'min:1'],
            'productos.*' => ['integer', 'exists:productos,id'],
        ]);

        $productos = $datosValidados['productos'];
        unset($datosValidados['productos']);

        $reserva = Reserva::create($datosValidados);

        $reserva->productos()->attach($productos);

        return redirect()
            ->route('reservas.index')
            ->with('exito', 'La reserva se realizó correctamente.');
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();

        return redirect()
            ->route('reservas.index')
            ->with('exito', 'La reserva fue cancelada correctamente.');
    }
}