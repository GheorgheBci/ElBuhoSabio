<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="{{ asset('js/pdf.js') }}" async></script>
    <title>Libro</title>
</head>

<body>

    <div class="salir">
        <a href="{{ route('usuario.libros') }}"><i class="fas fa-times salir__icono"></i></a>
    </div>

    <div class="menu__div--sticky">
        <div class="menu__botones">
            <input type="hidden" id="url" value="{{ $ejemplar->contenido }}">
            <button id="anterior-pagina" class="menu__boton">Anterior</button>
            <button id="siguiente-pagina" class="menu__boton">Siguiente</button>
            <button id="acercar" class="menu__boton">Acercar</button>
            <button id="alejar" class="menu__boton">Alejar</button>
            <button id="default" class="menu__boton">100%</button>
            <button id="cambiar-color-fondo" class="menu__boton">Oscuro</button>
        </div>

        <div class="menu__pagina">
            <span>Página <span id="pagina"></span> de <span id="total-paginas"></span></span>
        </div>
    </div>

    <div class="libro__pdf">
        <canvas id="pdf"></canvas>
    </div>

</body>

</html>
