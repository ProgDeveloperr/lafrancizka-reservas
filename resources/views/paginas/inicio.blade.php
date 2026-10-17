@extends('layouts.app')

@section('titulo', 'Inicio - Restaurante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endsection

@section('contenido')

    <section class="hero">

        <div class="hero-contenido">

            <span class="hero-etiqueta">Cocina & encuentros</span>

            <h1>
                Una experiencia para disfrutar alrededor de la mesa
            </h1>

            <p>
                Platos preparados con ingredientes seleccionados,
                un ambiente cálido y una forma simple de reservar tu mesa.
            </p>

            <div class="hero-acciones">

                <a
                    href="{{ route('reservas.create') }}"
                    class="boton"
                >
                    Reservar mesa
                </a>

                <a
                    href="{{ route('menu') }}"
                    class="boton boton-secundario"
                >
                    Ver menú
                </a>

            </div>

        </div>


        <aside class="hero-tarjeta">

            <span class="hero-tarjeta-etiqueta">
                Te esperamos
            </span>

            <h2>Horarios</h2>

            <div class="dato-horario">
                <strong>Martes a domingos</strong>
                <span>12:00 a 15:00 hs</span>
                <span>20:00 a 00:00 hs</span>
            </div>

            <div class="hero-separador"></div>

            <p>
                Reservá previamente para asegurar tu mesa.
            </p>

            <a href="{{ route('contacto') }}">
                Ver ubicación y contacto
            </a>

        </aside>

    </section>


    <section class="propuesta">

        <div class="encabezado-seccion">
            <span>Nuestra propuesta</span>
            <h2>Todo lo necesario para una buena experiencia</h2>
        </div>


        <div class="propuesta-grid">

            <article class="propuesta-item">
                <span class="numero">01</span>

                <h3>Cocina</h3>

                <p>
                    Una selección de entradas, platos principales,
                    postres y bebidas para distintos gustos.
                </p>
            </article>


            <article class="propuesta-item">
                <span class="numero">02</span>

                <h3>Reservas simples</h3>

                <p>
                    Elegí la fecha, hora, cantidad de personas y los
                    productos que querés incluir en tu reserva.
                </p>
            </article>


            <article class="propuesta-item">
                <span class="numero">03</span>

                <h3>Un lugar para compartir</h3>

                <p>
                    Un espacio pensado para almuerzos, cenas y
                    encuentros con familia o amigos.
                </p>
            </article>

        </div>

    </section>


    <section class="inicio-cta">

        <div>
            <span>¿Ya sabés cuándo venir?</span>

            <h2>Prepará tu próxima visita</h2>

            <p>
                Consultá nuestro menú y realizá tu reserva en pocos pasos.
            </p>
        </div>

        <a
            href="{{ route('reservas.create') }}"
            class="boton"
        >
            Hacer una reserva
        </a>

    </section>

@endsection