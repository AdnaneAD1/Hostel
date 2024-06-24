<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Hostel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
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
                            <h1>GUESTHOUSE</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="/roomlist">Properties</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>Schedule a visit</a></li>
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
                    <span class="breadcrumb"><a href="#">Home</a> / Single Property</span>
                    <h3>Single Property</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Donner les dates dates de réservation et le prix au script -->
    <!-- Ajoutez ces éléments cachés dans la vue HTML -->
    <span id="reserved-dates" style="display: none;">{{ json_encode($reservedDates) }}</span>
    <span id="room-price-per-night" style="display: none;">{{ $roomPricePerNight }}</span>

    <div class="single-property section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-image">
                        <img src="{{ asset('assets/img/' . $room->main_image) }}" alt="">
                    </div>
                    <div class="main-content">
                        <h5><span class="category">
                                <h5>{{ $room->name }}</h5>
                            </span> {{ $room->amount }} €</h5>
                        <h5><br><br>Description</h5>
                        <p>
                            {{ $room->description }}
                        </p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Quelques images de la chambre
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach($room->images as $image)
                                        <img src="{{ asset('assets/img/' . $image) }}" alt="{{ $room->name }}"> <br><br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Réservation
                                </button>
                            </h2>
                            <br>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="container">
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
                                    <div class="col-lg-10 offset-lg-3 info-table" data-aos="fade">
                                        <h2 style="text-align: center; padding-bottom:10%;">Réservation Form</h2>
                                        <form class="row g-3" id="reservation-form" method="POST"
                                            action="{{ route('reservation') }}">
                                            @csrf
                                            <!-- Champs pour entrer les informations -->
                                            <div id="reservation-form-fields">
                                                <div class="col-md-12">
                                                    <label for="date-range" class="form-label">Date Range</label>
                                                    <input type="text" id="date-range" class="form-control"
                                                        name="date_range" placeholder="Y-m-d to Y-m-d" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input type="email" id="email" name="email" class="form-control"
                                                        placeholder="email" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="nom" class="form-label">Nom</label>
                                                    <input type="text" id="nom" name="nom" class="form-control"
                                                        placeholder="nom" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="prenom" class="form-label">Prenom</label>
                                                    <input type="text" id="prenom" name="prenom" class="form-control"
                                                        placeholder="prenom" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="tel" class="form-label">Numéro</label>
                                                    <input type="text" id="tel" name="tel" class="form-control"
                                                        placeholder="Contact" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="adults" class="form-label">Adults</label>
                                                    <input type="number" id="adults" class="form-control" name="adults"
                                                        value="1" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="children" class="form-label">Children</label>
                                                    <input type="number" id="children" class="form-control"
                                                        name="children" value="0" required>
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" style="width:30%;"
                                                        class="btn btn-primary btn-lg" id="next-step">Next Step</button>
                                                </div>
                                            </div>
                                            <!-- Champs pour le formulaire de paiement -->
                                            <div id="payment-details" style="display: none;">
                                                <div id="total-amount">
                                                    <label for="montant" class="form-label">Montant total à payer: <span
                                                            id="amount-value"></span>€</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="payment-method" class="form-label">Méthode de
                                                        paiement</label>
                                                    <select id="payment-method" name="payment_method"
                                                        class="form-select" required>
                                                        <option value="">Sélectionner la méthode</option>
                                                        <option value="paypal">PayPal</option>
                                                        <option value="fedapay">FedaPay</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 payment-fields" id="fedapay-fields"
                                                    style="display: none;">
                                                    <label for="fedapay-phone" class="form-label">Numéro de
                                                        téléphone</label>
                                                    <input type="text" id="fedapay-phone" class="form-control"
                                                        name="fedapay_phone">
                                                </div>
                                                <!-- Ajoutez d'autres champs pour les coordonnées du paiement si nécessaire -->
                                                <div class="col-12">
                                                    <button type="submit" style="width:30%;"
                                                        class="btn btn-primary btn-lg"
                                                        id="payment-submit">Payment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-table">
                        <ul>
                            @foreach ($room->facilities as $facility => $data)
                                <li>
                                    <i class="{{ $data['icon'] }}">{{ $facility }}</i>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Rejoignez nous !</h3>
                <p>Nam libero tempore cum soluta nobis eseligendi optio cumque nihil impedit quo minus maxime
                    placeat
                    facere</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Quick Link</h3>
                <ul>
                    <li><a href="/">Acceuil</a></li>
                    <li><a href="/roomlist">Nos chambres</a></li>
                    <li><a href="/contact">Contactez-nous</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Nos services supplemetaires</h3>
                <ul>
                    <li><a href="#">SPA Treatment</a></li>
                    <li><a href="#">Food & Drinks</a></li>
                    <li><a href="#">Breakfast</a></li>
                </ul>
            </div>

        </div>
        <div class="footer-bottom">
            <p>© 2023 Guesthouse. All Rights Reserved.</p>

        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js')}} "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
