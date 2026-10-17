@extends('layouts.app')

@section('titulo', 'Nueva reserva - Restaurante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/reservas.css') }}">
@endsection

@section('contenido')

    <section class="encabezado-reservas">

        <div>
            <span class="etiqueta-reservas">
                Reservá tu mesa
            </span>

            <h1 class="titulo-pagina">
                Nueva reserva
            </h1>

            <p class="subtitulo-pagina">
                Completá tus datos, elegí cuándo querés visitarnos
                y seleccioná los productos que quieras incluir.
            </p>
        </div>

        <a
            href="{{ route('reservas.index') }}"
            class="boton boton-secundario"
        >
            Ver reservas
        </a>

    </section>


    <form
        action="{{ route('reservas.store') }}"
        method="POST"
        class="formulario-reserva"
        novalidate
    >

        @csrf


        <section class="bloque-formulario">

            <div class="bloque-titulo">
                <span>01</span>

                <div>
                    <h2>Datos de contacto</h2>

                    <p>
                        Información necesaria para identificar la reserva.
                    </p>
                </div>
            </div>


            <div class="campos-grid">

                <div class="campo campo-completo">
                    <label for="nombre_cliente">
                        Nombre y apellido
                    </label>

                    <input
                        type="text"
                        id="nombre_cliente"
                        name="nombre_cliente"
                        value="{{ old('nombre_cliente') }}"
                        placeholder="Ej: Juan Pérez"
                    >

                    @error('nombre_cliente')
                        <span class="mensaje-error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div class="campo">
                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nombre@correo.com"
                    >

                    @error('email')
                        <span class="mensaje-error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div class="campo">
                    <label for="telefono">
                        Teléfono
                    </label>

                    <input
                        type="text"
                        id="telefono"
                        name="telefono"
                        value="{{ old('telefono') }}"
                        placeholder="Ej: 11 2345 6789"
                    >

                    @error('telefono')
                        <span class="mensaje-error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

            </div>

        </section>


        <section class="bloque-formulario">

            <div class="bloque-titulo">
                <span>02</span>

                <div>
                    <h2>Fecha y horario</h2>

                    <p>
                        Indicá cuándo querés venir y para cuántas personas.
                    </p>
                </div>
            </div>


            <div class="campos-grid campos-reserva">

                <div class="campo">
                    <label for="fecha">
                        Fecha
                    </label>

                    <input
                        type="date"
                        id="fecha"
                        name="fecha"
                        min="{{ date('Y-m-d') }}"
                        value="{{ old('fecha') }}"
                    >

                    @error('fecha')
                        <span class="mensaje-error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div class="campo">
                    <label for="hora">
                        Hora
                    </label>

                    <input
                        type="time"
                        id="hora"
                        name="hora"
                        value="{{ old('hora') }}"
                    >

                    @error('hora')
                        <span class="mensaje-error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div class="campo">
                    <label for="cantidad_personas">
                        Cantidad de personas
                    </label>

                    <input
                        type="number"
                        id="cantidad_personas"
                        name="cantidad_personas"
                        min="1"
                        max="10"
                        value="{{ old('cantidad_personas') }}"
                        placeholder="1 a 10"
                    >

                    @error('cantidad_personas')
                        <span class="mensaje-error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

            </div>

        </section>


        <section class="bloque-formulario">

            <div class="bloque-titulo">
                <span>03</span>

                <div>
                    <h2>Productos</h2>

                    <p>
                        Seleccioná al menos una opción para incluir
                        en la reserva.
                    </p>
                </div>
            </div>


            <div class="productos-seleccion">

                @foreach ($productos as $producto)

                    <label class="producto-seleccion">

                        <input
                            type="checkbox"
                            name="productos[]"
                            value="{{ $producto->id }}"
                            {{ in_array($producto->id, old('productos', [])) ? 'checked' : '' }}
                        >

                        <span class="producto-check"></span>

                        <span class="producto-info">

                            <strong>
                                {{ $producto->nombre }}
                            </strong>

                            <small>
                                {{ $producto->categoria }}
                            </small>

                        </span>

                        <span class="producto-valor">
                            ${{ number_format($producto->precio, 2, ',', '.') }}
                        </span>

                    </label>

                @endforeach

            </div>


            @error('productos')
                <span class="mensaje-error error-productos">
                    {{ $message }}
                </span>
            @enderror

            @error('productos.*')
                <span class="mensaje-error error-productos">
                    {{ $message }}
                </span>
            @enderror

        </section>


        <section class="bloque-formulario">

            <div class="bloque-titulo">
                <span>04</span>

                <div>
                    <h2>Observaciones</h2>

                    <p>
                        Podés agregar información adicional si lo necesitás.
                    </p>
                </div>
            </div>


            <div class="campo">
                <label for="observaciones">
                    Comentarios adicionales
                </label>

                <textarea
                    id="observaciones"
                    name="observaciones"
                    rows="5"
                    placeholder="Ej: preferencia de mesa, cumpleaños, necesidades particulares..."
                >{{ old('observaciones') }}</textarea>

                @error('observaciones')
                    <span class="mensaje-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

        </section>


        <div class="acciones-formulario">

            <div>
                <strong>Confirmar reserva</strong>

                <span>
                    Revisá los datos antes de continuar.
                </span>
            </div>

            <button
                type="submit"
                class="boton"
            >
                Confirmar reserva
            </button>

        </div>

    </form>

@endsection