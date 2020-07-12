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
                <a href="{{ Route('index') }}"><img src="https://picsum.photos/170/95" alt="logo Freyja"></a>
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
                                <a href="lithotherapy.html">Lithotherapie</a>
                                <ul class="menu-deroulant-content flex">
                                    <li><a href="lithotherapyGrid.html"></a>Nos pierres</li>
                                </ul>
                            </li>

                            <!-- MENU NON-DEROULANT -->
                            <li>
                                <a href="candles.html" id="nav_candles">Cire</a>
                            </li>

                            <!-- MENU DEROULANT -->
                            <li class="menu-deroulant" id="nav_beauty">
                                <a href="beauty.html">Produits de beauté</a>
                                <ul class="menu-deroulant-content flex">
                                    <li><a href="deesse.html"></a>Déesse</li>
                                </ul>
                            </li>

                            <li>
                                <a href="wellbeing.html" id="nav_wellbeing">Bien-être</a>
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
                        <li><a href="beauty.html">Produits de beauté</a></li>
                        <li><a href="wellbeing.html">Bien-être</a></li>
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
    <footer>
        <div id="container-footer">
            <div class="text-footer">
                <p>
                    <a href="contact.html">Contact</a> - <span class="color-gold">Partagez :</span>
                </p>
                <div class="logos-reseaux" id="logos-reseaux">
                    <a href="https://www.facebook.com/universdefreyja/" target="blank" title="Facebook"><img src="image/logo_facebook" alt="Logo Facebook"></a>
                    <a href="#" targrt="blank" title="Instagram"><img src="images/logo_instagram" alt="Logo Instagram"></a>
                </div>
                <p>
                    <a href="politique_confidentialité.html">Politique de confidentialité</a> - <a href="plan_du_site.html">Plan du site</a>
                </p>

                <p class="copyright">
                    Copyright | L'Univers de Freyja | 2020 <i class="far far fa-copyright"></i>
                </p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="{{ asset('assets/js/option.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
