@extends('layouts.app')

@section('titulo', 'Reservas - Restaurante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/reservas.css') }}">
@endsection

@section('contenido')

    <section class="encabezado-reservas">

        <div>
            <span class="etiqueta-reservas">
                Gestión de reservas
            </span>

            <h1 class="titulo-pagina">
                Reservas
            </h1>

            <p class="subtitulo-pagina">
                Consultá las próximas visitas, los datos de contacto
                y los productos asociados a cada reserva.
            </p>
        </div>

        <a
            href="{{ route('reservas.create') }}"
            class="boton"
        >
            Nueva reserva
        </a>

    </section>


    @if (session('exito'))

        <div class="mensaje mensaje-exito">
            {{ session('exito') }}
        </div>

    @endif


    @if ($reservas->isNotEmpty())

        <div class="resumen-reservas">

            <div>
                <span>Total registradas</span>
                <strong>{{ $reservas->count() }}</strong>
            </div>

            <p>
                Ordenadas por fecha y horario.
            </p>

        </div>

    @endif


    <section class="lista-reservas">

        @forelse ($reservas as $reserva)

            <article class="reserva-card">

                <header class="reserva-cabecera">

                    <div>

                        <span class="reserva-numero">
                            Reserva #{{ $reserva->id }}
                        </span>

                        <h2>
                            {{ $reserva->nombre_cliente }}
                        </h2>

                    </div>


                    <div class="reserva-fecha">

                        <strong>
                            {{ $reserva->fecha->format('d/m/Y') }}
                        </strong>

                        <span>
                            {{ substr($reserva->hora, 0, 5) }} hs
                        </span>

                    </div>

                </header>


                <div class="reserva-datos">

                    <div class="dato-reserva">
                        <span>Email</span>
                        <strong>{{ $reserva->email }}</strong>
                    </div>

                    <div class="dato-reserva">
                        <span>Teléfono</span>
                        <strong>{{ $reserva->telefono }}</strong>
                    </div>

                    <div class="dato-reserva">
                        <span>Personas</span>
                        <strong>{{ $reserva->cantidad_personas }}</strong>
                    </div>

                </div>


                @if ($reserva->observaciones)

                    <div class="reserva-observaciones">

                        <span>Observaciones</span>

                        <p>
                            {{ $reserva->observaciones }}
                        </p>

                    </div>

                @endif


                <div class="reserva-productos">

                    <div class="productos-titulo">

                        <span>Productos incluidos</span>

                        <small>
                            {{ $reserva->productos->count() }}
                            {{ $reserva->productos->count() === 1 ? 'producto' : 'productos' }}
                        </small>

                    </div>


                    <div class="productos-reserva-lista">

                        @foreach ($reserva->productos as $producto)

                            <div class="producto-reserva-item">

                                <span>
                                    {{ $producto->nombre }}
                                </span>

                                <strong>
                                    ${{ number_format($producto->precio, 2, ',', '.') }}
                                </strong>

                            </div>

                        @endforeach

                    </div>

                </div>


                <footer class="reserva-acciones">

                    <span>
                        Reserva registrada
                    </span>

                    <form
                        action="{{ route('reservas.destroy', $reserva) }}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="boton boton-peligro"
                        >
                            Cancelar reserva
                        </button>
                    </form>

                </footer>

            </article>

        @empty

            <div class="reservas-vacias">

                <h2>No hay reservas registradas</h2>

                <p>
                    Podés crear la primera reserva desde el formulario.
                </p>

                <a
                    href="{{ route('reservas.create') }}"
                    class="boton"
                >
                    Realizar una reserva
                </a>

            </div>

        @endforelse

    </section>

@endsection