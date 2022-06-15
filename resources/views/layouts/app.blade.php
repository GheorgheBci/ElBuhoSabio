<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('anime.min.js') }}" async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3be00db212.js" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
</head>

<body>
    <div class="logo">
        <img src="{{ asset('img/buho.svg') }}" alt="buho" class="logo__imagen--width">
    </div>

    <header class="header header--height">
        <nav>
            <span id="menu-barra" class="header__menu-barra">
                <i class="fas fa-bars header__i--margin"></i>Menu
            </span>
            <ul id="c" class="header__ul header__ul--none">

                <li><a href="{{ route('inicio') }}" class="header__a">Inicio</a></li>
                <li><a href="{{ route('ejemplar.ejemplares') }}" class="header__a">Ejemplares</a></li>
                <li><a href="{{ route('conocenos') }}" class="header__a">Conocenos</a></li>
                <li><a href="{{ route('contacto') }}" class="header__a">Contacto</a></li>
                <li><a href="{{ route('usuario.wishlist') }}" class="header__a"><i
                            class="fas fa-heart header__i--margin"></i>WishList</a></li>
                <li><a href="{{ route('show') }}" class="header__a"><i
                            class="fas fa-cart-plus header__i--margin"></i>Carrito</a>
                </li>
                <li>
                    @if (Auth::user())

                        @if (Auth::user()->idRol == 3)
                            <a href="{{ route('admin') }}" class="header__a"><i
                                    class="fas fa-tools header__i--margin"></i>Admin</a>
                        @else
                            <a href="{{ route('usuario.userHome') }}" class="header__a"><i
                                    class="fas fa-user header__i--margin"></i>Mi Cuenta</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="header__a"><i
                                class="fas fa-user header__i--margin"></i>Mi
                            Cuenta</a>
                    @endif
                </li>
            </ul>
        </nav>
    </header>

    <div class="contenedor">

        <main>
            @yield('content')
        </main>

    </div>

    <footer class="footer">
        <div class="footer__contenido">

            <div class="footer__informacion footer__informacion--width">
                <h3 class="footer__h3">Más información de la compañía</h3>
                <p class="footer__p--justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, beatae
                    voluptas nobis dolor fuga in
                    labore optio quae dolores consequatur eius earum quisquam eligendi a, quaerat, hic minima esse
                    deleniti!</p>
            </div>

            <div class="footer__redes-sociales footer__redes-sociales--width">
                <h3 class="footer__h3">Redes Sociales</h3>
                <ul class="footer__ul">
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-linkedin"></i></li>
                </ul>
            </div>

            <div class="footer__contacto footer__contacto--width">
                <h3 class="footer__h3">Atención al Cliente</h3>
                <a href="{{ route('contacto') }}" class="footer__a">Contacto</a>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="footer__div--size footer__div--padding">
                <span>© 2022 Todos los Derechos Reservados</span>
            </div>
            <div class="footer__div--size footer__div--padding">
                <span>Privacidad y Política |</span>
                <span>Terminos y Condiciones</span>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/script.js') }}" async></script>

</body>

</html>
