<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="txt/html;charset=utf-8">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Univers de Freyja</title>
    <meta name="desciption" content="L'Univers de Freyja">
    <meta name="author" content="Maëra DAVID">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/FAVICON_LOGO/FAVICON.ico') }}">
    <script src="https://kit.fontawesome.com/c2abdf73d8.js" crossorigin="anonymous"></script>
</head>

<body class="index">
    <!-- START HEADER -->
    <header>

        <!-- START CONTAINER 2 - BG -->
        <div id="container2-header">
            <!-- LOGO + PRINCIPAL MENU -->
            <div class="logo-menu flex">
                <!-- LOGO -->
                <div class="logo">
                <a href="{{ Route('index') }}"><img src="{{ asset('assets/img/FAVICON_LOGO/LOGO_FREYJA_NAVBAR.jpg') }}" alt="logo Freyja"></a>
                </div>

                <!-- NAVBAR -->
                <div id="div-menu-block">

                    <!-- DEROULANT + NON DEROULANT -->
                    <nav class="principal-nav">
                        <ul class="flex">
                            <li>
                                <a href="{{ Route('index') }}" id="nav_site">Accueil</a>
                            </li>

                            <li>
                                <a href="{{ Route('apropos') }}" id="nav_site">A propos</a>
                            </li>

                            <li>
                                <a href="{{ Route('massage') }}" id="nav_massage">Massage</a>
                            </li>

                            <!-- MENU DEROULANT -->
                            <li class="menu-deroulant" id="nav_lithotherapy">
                                <a href="{{ Route('lithotherapy') }}">Lithotherapie</a>
                                <ul class="menu-deroulant-content flex">
                                    <li class="submenu"><a href="{{ Route('lithotherapygrid') }}">Nos pierres</a></li>
                                </ul>
                            </li>

                            <!-- MENU NON-DEROULANT -->
                            <li>
                                <a href="{{ Route('cire') }}" id="nav_candles">Cire</a>
                            </li>

                            <!-- MENU DEROULANT -->
                            <li class="menu-deroulant" id="nav_beauty">
                                <a href="{{ Route('beauty') }}">Soins beauté</a>
                                <!--<ul class="menu-deroulant-content flex">
                                    <li><a href="deesse.html">Déesse</a></li>
                                </ul>-->
                            </li>

                            <li>
                                <a href="{{ Route('goldBook') }}" id="nav_wellbeing">Livre d'Or</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- LOGO + MENU BURGER -->
        <div class="logo-nav-burger">
            <div class="logo-burger">
                <div class="logo">
                    <a href="index.html"><img src="picsum" alt="logo Freyja"></a>
                </div>

                <div class="burger" id="burgerMenu">
                    <button class="navBtn-burger"><i class="fa fa-bars"></i></button>
                </div>
            </div>

            <!-- MENU BURGER -->
            <div id="div-menu-hide">
                <nav class="nav-burger">
                    <ul>
                        <li><a href="{{ asset('ressources/views/index.blade.php') }}">Accueil</a></li>
                        <li><a href="lithotherapy.html">Lithothérapie</a></li>
                        <li><a href="candles.html">Cire</a></li>
                        <li><a href="beauty.html">Soins beauté</a></li>
                        <li><a href="wellbeing.html">Livre d'Or</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

<main>
    @yield('content')
</main>

    <!-- START FOOTER -->
    <footer class="footer-distributed">
                    <div class="footer-right">
                        <a target="_blank" href="https://www.facebook.com/universdefreyja"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://instagram.com/freyjaunivers?igshid=1g5vqwhup6zg9"><i class="fa fa-instagram"></i></a>
                    </div>

                    <div class="footer-left">
                        <p class="footer-links">
                            <a class="link1" href="#">A propos</a>
                            <a href="#">Contact</a>
                            <a href="#">Livre d'Or</a>
                        </p>

                        <p>L'Univers de Freyja &copy; 2020</p>
                    </div>
    </footer>

    <!-- JS -->
    <script src="{{ asset('assets/js/option.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
