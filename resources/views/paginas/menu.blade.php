@extends('layouts.app')

@section('titulo', 'Menú - Restaurante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('contenido')

    <section class="encabezado-menu">

        <div>
            <span class="etiqueta-menu">Nuestra cocina</span>

            <h1 class="titulo-pagina">
                Menú
            </h1>

            <p class="subtitulo-pagina">
                Conocé nuestra selección de platos y bebidas,
                preparados para acompañar cada momento.
            </p>
        </div>

        <a
            href="{{ route('reservas.create') }}"
            class="boton"
        >
            Reservar mesa
        </a>

    </section>


    @forelse ($productosPorCategoria as $categoria => $productos)

        <section class="categoria-menu">

            <header class="categoria-encabezado">

                <div>
                    <span class="categoria-etiqueta">
                        Selección
                    </span>

                    <h2>
                        {{ $categoria }}
                    </h2>
                </div>

                <span class="cantidad-productos">
                    {{ $productos->count() }}
                    {{ $productos->count() === 1 ? 'opción' : 'opciones' }}
                </span>

            </header>


            <div class="productos-grid">

                @foreach ($productos as $producto)

                    <article class="producto">

                        <div class="producto-cabecera">

                            <h3>
                                {{ $producto->nombre }}
                            </h3>

                            <span class="producto-precio">
                                ${{ number_format($producto->precio, 2, ',', '.') }}
                            </span>

                        </div>

                        <p>
                            {{ $producto->descripcion }}
                        </p>

                    </article>

                @endforeach

            </div>

        </section>

    @empty

        <div class="menu-vacio">

            <h2>No hay productos disponibles</h2>

            <p>
                Próximamente vas a poder consultar nuestras opciones.
            </p>

        </div>

    @endforelse


    <section class="menu-cta">

        <div>
            <span>¿Encontraste algo que te guste?</span>

            <h2>Reservá tu mesa</h2>

            <p>
                Seleccioná los productos que querés incluir
                y completá los datos de tu reserva.
            </p>
        </div>

        <a
            href="{{ route('reservas.create') }}"
            class="boton"
        >
            Comenzar reserva
        </a>

    </section>

@endsection