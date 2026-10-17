@extends('layouts.app')

@section('titulo', 'Contacto - Restaurante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
@endsection

@section('contenido')

    <section class="encabezado-contacto">

        <span class="etiqueta-contacto">
            Información
        </span>

        <h1 class="titulo-pagina">
            Contacto y ubicación
        </h1>

        <p class="subtitulo-pagina">
            Encontrá toda la información necesaria para organizar tu visita.
        </p>

    </section>


    <section class="contacto-grid">

        <div class="contacto-principal">

            <article class="contacto-bloque">

                <span class="contacto-numero">
                    01
                </span>

                <div>

                    <h2>Ubicación</h2>

                    <p>
                        Av. Principal 1234
                    </p>

                    <span class="contacto-aclaracion">
                        Buenos Aires, Argentina
                    </span>

                </div>

            </article>


            <article class="contacto-bloque">

                <span class="contacto-numero">
                    02
                </span>

                <div>

                    <h2>Teléfono</h2>

                    <p>
                        (011) 4567-8900
                    </p>

                    <span class="contacto-aclaracion">
                        Consultas y reservas
                    </span>

                </div>

            </article>


            <article class="contacto-bloque">

                <span class="contacto-numero">
                    03
                </span>

                <div>

                    <h2>Atención</h2>

                    <p>
                        Martes a domingos
                    </p>

                    <span class="contacto-aclaracion">
                        Lunes cerrado
                    </span>

                </div>

            </article>

        </div>


        <aside class="horarios-contacto">

            <span class="horarios-etiqueta">
                Horarios
            </span>

            <h2>
                Te esperamos
            </h2>


            <div class="franja-horaria">

                <div>
                    <strong>Almuerzo</strong>
                    <span>12:00 a 15:00 hs</span>
                </div>

                <div>
                    <strong>Cena</strong>
                    <span>20:00 a 00:00 hs</span>
                </div>

            </div>


            <div class="horarios-separador"></div>

            <p>
                Para asegurar disponibilidad, recomendamos realizar
                la reserva antes de tu visita.
            </p>

            <a
                href="{{ route('reservas.create') }}"
                class="boton"
            >
                Reservar mesa
            </a>

        </aside>

    </section>


    <section class="contacto-cta">

        <div>

            <span>¿Querés conocer nuestra propuesta?</span>

            <h2>
                Consultá el menú antes de reservar
            </h2>

            <p>
                Revisá los platos y bebidas disponibles actualmente.
            </p>

        </div>

        <a
            href="{{ route('menu') }}"
            class="boton boton-secundario"
        >
            Ver menú
        </a>

    </section>

@endsection