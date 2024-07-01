<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>RIVER OF LAND</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <h1 style="white-space: nowrap;">RIVER OF LAND</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Acceuil</a></li>
                            <li><a href="/roomlist">Nos Chambres</a></li>
                            <li><a href="/contact" class="active">Contactez-nous</a></li>
                            <li><a href="/roomlist"><i class="fa fa-calendar"></i>Faire une réservation</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">Accueil</a> / Contactez-nous</span>
                    <h3>Contactez-nous</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>| Contactez-nous</h6>
                        <h2>Entrez en contact avec nos agents</h2>
                    </div>
                    <p>When you really need to download free CSS templates, please remember our website TemplateMo.
                        Also, tell your friends about our website. Thank you for visiting. There is a variety of
                        Bootstrap HTML CSS templates on our website. If you need more information, please contact us.
                    </p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item phone">
                                <img src="assets/img/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6>010-020-0340<br><span>Numéro de téléphone</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item email">
                                <img src="assets/img/email-icon.png" alt="" style="max-width: 52px;">
                                <h6>info@villa.co<br><span>Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="contact-form" action="{{ route('contactform')}}" method="post">
                        {{ csrf_field() }}
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="name">Nom et Prénom</label>
                                    <input type="name" name="name" id="name" placeholder="Votre Nom..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Votre E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Objet</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Objet..."
                                        autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Votre Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Envoyé</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer" id="contact">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="logo">
                    <a href="#home"><img src="{{ asset('assets/img/logo-river.png') }}" alt="logo" /></a>
                </div>
                <p class="section__description">
                    Découvrez un monde de confort, de luxe et d'aventure en explorant nos chambres soigneusement concu
                    pour vous.
                </p>
                <button class="btn nav__btn">Réserver Maintenant</button>

            </div>
            <div class="footer__col">
                <h4>Liens rapides</h4>
                <ul class="footer__links">
                    <li><a href="#">Acceuil</a></li>
                    <li><a href="#">Nos chambres</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>NOS SERVICES</h4>
                <ul class="footer__links">

                    <li><a href="#">Assistance Concierge</a></li>
                    <li><a href="#">Options de Réservation Flexibles</a></li>
                    <li><a href="#">Bien-être & Loisirs</a></li>

                </ul>
            </div>
            <div class="footer__col">
                <h4>CONTACTEZ-NOUS</h4>
                <ul class="footer__links">
                    <li><a href="#">riveroflandk@info.com</a></li>
                </ul>
                <div class="footer__socials">
                    <a href="#"><img src="{{ asset('assets/img/facebook.png') }}" alt="facebook" /></a>
                    <a href="#"><img src="{{ asset('assets/img/instagram.png') }}" alt="instagram" /></a>
                    <a href="#"><img src="{{ asset('assets/img/youtube.png') }}" alt="youtube" /></a>
                    <a href="#"><img src="{{ asset('assets/img/twitter.png') }}" alt="twitter" /></a>
                </div>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2024 River Of Land. All rights reserved.
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>
