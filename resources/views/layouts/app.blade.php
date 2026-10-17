<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta name="theme-color" content="#20362d">

<title>@yield('titulo', 'LaFrancizka')</title>
    <link
        rel="stylesheet"
        href="{{ asset('css/estilos.css') }}"
    >

    @yield('estilos')
</head>

<body>

    <header class="encabezado">

    <div class="contenedor encabezado-contenido">

        <a
            href="{{ route('inicio') }}"
            class="marca"
            aria-label="Ir al inicio"
        >

            <span class="marca-simbolo">
    F
</span>

<span class="marca-texto">
    <strong>LaFrancizka</strong>
    <small>Cocina & reservas</small>
</span>

        </a>


        <nav
            class="navegacion"
            aria-label="Navegación principal"
        >

            <a
                href="{{ route('inicio') }}"
                class="{{ request()->routeIs('inicio') ? 'activo' : '' }}"
            >
                Inicio
            </a>

            <a
                href="{{ route('menu') }}"
                class="{{ request()->routeIs('menu') ? 'activo' : '' }}"
            >
                Menú
            </a>

            <a
                href="{{ route('reservas.create') }}"
                class="nav-reservar {{ request()->routeIs('reservas.create') ? 'activo' : '' }}"
            >
                Reservar
            </a>

            <a
                href="{{ route('reservas.index') }}"
                class="{{ request()->routeIs('reservas.index') ? 'activo' : '' }}"
            >
                Reservas
            </a>

            <a
                href="{{ route('contacto') }}"
                class="{{ request()->routeIs('contacto') ? 'activo' : '' }}"
            >
                Contacto
            </a>

        </nav>

    </div>

</header>


    <main class="contenido">

        <div class="contenedor">

            @yield('contenido')

        </div>

    </main>


    <footer class="pie">

    <div class="contenedor pie-principal">

        <div class="pie-marca">

            <div class="pie-identidad">

                <span class="pie-simbolo">
    F
</span>

<div>
    <strong>LaFrancizka</strong>
    <span>Cocina & reservas</span>
</div>

            </div>

            <p>
                Un espacio pensado para disfrutar de una buena
                comida y compartir buenos momentos.
            </p>

        </div>


        <div class="pie-columna">

            <span class="pie-titulo">
                Navegación
            </span>

            <a href="{{ route('inicio') }}">
                Inicio
            </a>

            <a href="{{ route('menu') }}">
                Menú
            </a>

            <a href="{{ route('reservas.create') }}">
                Reservar mesa
            </a>

            <a href="{{ route('contacto') }}">
                Contacto
            </a>

        </div>


        <div class="pie-columna">

            <span class="pie-titulo">
                Horarios
            </span>

            <p>
                Martes a domingos
            </p>

            <span>
                12:00 a 15:00 hs
            </span>

            <span>
                20:00 a 00:00 hs
            </span>

        </div>


        <div class="pie-columna">

            <span class="pie-titulo">
                Contacto
            </span>

            <p>
                Av. Principal 1234
            </p>

            <span>
                Buenos Aires, Argentina
            </span>

            <span>
                (011) 4567-8900
            </span>

        </div>

    </div>


    <div class="pie-inferior">

        <div class="contenedor pie-inferior-contenido">

           <span>
    &copy; {{ date('Y') }} LaFrancizka
</span>

            <span>
                Sistema de reservas
            </span>

        </div>

    </div>

</footer>

</body>

</html>