<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('paginas.inicio');
    }

  public function menu()
{
    $productosPorCategoria = Producto::orderBy('categoria')
        ->orderBy('nombre')
        ->get()
        ->groupBy('categoria');

    return view(
        'paginas.menu',
        compact('productosPorCategoria')
    );
}

    public function contacto()
    {
        return view('paginas.contacto');
    }
}