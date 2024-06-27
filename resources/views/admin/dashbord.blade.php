<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { "families": ["Lato:300,400,700,900"] },
            custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css'] },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="/dash" class="logo">
                    <i class="fa-solid fa-hotel" Style="color:white;"></i><span Style="color:white;"> River Of
                        Land</span>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <!-- <i class="fa-solid fa-user" style="color: white; font-size: 1.5rem;"> </i> -->
                            <br><span class="d-none d-md-block dropdown-toggle ps-2" style="color: white;">
                                @if(Session::has('prenom-admin'))
                                    {{ Session::get('prenom-admin') }}
                                @endif
                            </span>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <i class="fa-solid fa-user" style="color: white; font-size: 1.5rem;"></i>
                            <span class="d-none d-md-block dropdown-toggle ps-2" style="color: white;">
                                @if(Session::has('prenom-admin'))
                                    {{ Session::get('prenom-admin') }}
                                @endif
                            </span>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <i class="fa-solid fa-user">
                                    <span style="font-family: Lato, sans-serif;">
                                        <span class="user-level">Administrator</span>
                                        <span class="caret"></span>
                                    </span>
                                </i>

                            </a>
                            <!-- <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="/dash" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i
                                        class="fas fa-home"></i>
                                    <p>Dashboard</p></a>
                        </li>
                    </ul>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="{{ route('deconnexion') }}" class="btn btn-primary btn-block"><span
                                    class="btn-label mr-2"> <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    <p>Logout</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <a href="{{ route('register') }}" class="btn btn-secondary btn-round">Ajouter
                                    Administrateur</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <div class="row mt--2">
                        <div class="col-md-6">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="card-title">Overall statistics</div>
                                    <div class="card-category">Daily information about statistics in system</div>
                                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                        <div class="px-2 pb-2 pb-md-0 text-center">
                                            <div id="circles-1"></div>
                                            <h6 class="fw-bold mt-3 mb-0">Nouvelles réservation</h6>
                                        </div>
                                        <div class="px-2 pb-2 pb-md-0 text-center">
                                            <div id="circles-2"></div>
                                            <h6 class="fw-bold mt-3 mb-0">Nombre de chambre réserver</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="card-title">Total income & spend statistics</div>
                                    <div class="row py-3">
                                        <div class="col-md-4 d-flex flex-column justify-content-around">
                                            <div>
                                                <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                                                <h3 class="fw-bold">{{ $totalAmountPaid }} €</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="chart-container">
                                                <canvas id="totalIncomeChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="h1 fw-bold float-right text-warning">{{ $percentageGrowth }}%</div>
                                    <h2 class="mb-2">{{ $currentWeekReservation }}</h2>
                                    <p class="text-muted">Réservation</p>
                                    <div class="pull-in sparkline-fix">
                                        <div id="lineChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-title">Daily Sales</div>
                                    <div class="card-category">March 25 - April 02</div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="mb-4 mt-2">
                                        <h1>{{ $totalAmountPaidToday }}</h1>
                                    </div>
                                    <div class="pull-in">
                                        <canvas id="dailySalesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">Bilan <span>| Réservation</span></h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date de venue</th>
                                    <th scope="col">Date de départ</th>
                                    <th scope="col">Montant Payé</th>
                                    <th scope="col">Chambre réservé</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                    <tr>
                                        <th scope="row"><a href="#">{{ $reservation->id }}</a></th>
                                        <td>{{ $reservation->check_in }}</td>
                                        <td>{{ $reservation->check_out }}</td>
                                        <td>{{ round($reservation->amount) }} €</td>
                                        <td>{{ $reservation->room_name }}
                                        </td>
                                        <!-- <td>
                                                                                                                                            <span
                                                                                                                                                class="badge bg-{{ $reservation->statut == 'valide' ? 'success' : ($reservation->statut == 'pending' ? 'warning' : 'danger') }}">
                                                                                                                                                {{ $reservation->statut }}
                                                                                                                                            </span>
                                                                                                                                        </td>
                                                                                                                                        <td class="scrolling-text">{{ $reservation->description }}</td> -->

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Recent Sales -->
            <style>
                /* Style pour la div contenant le texte avec défilement */
                .scrolling-text {

                    overflow: auto;
                    /* Activation du défilement lorsque le contenu dépasse la hauteur définie */

                }
            </style>
            <footer class="footer">
                <div class="footer-bottom">
                    <p>© 2023 Guesthouse. All Rights Reserved.</p>

                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="../assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo.js"></script>
    <script src="../assets/js/demo.js"></script>
    <script>
        // Préparer les données depuis le backend
        const newReservations = @json($newReservations);
        const roomsReserved = @json($roomsReserved);
        const totalIncome = @json($totalAmountPaid);
        const dailySales = @json($dailySales);

        // Créer les cercles avec les données dynamiques
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: newReservations,
            maxValue: 100, // Vous pouvez ajuster cette valeur selon vos besoins
            width: 7,
            text: newReservations,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        });

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: roomsReserved,
            maxValue: 100, // Vous pouvez ajuster cette valeur selon vos besoins
            width: 7,
            text: roomsReserved,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        });

        // Préparer les données pour le graphique des revenus totaux
        const totalIncomeChartCtx = document.getElementById('totalIncomeChart').getContext('2d');
        const dailySalesLabels = dailySales.map(sale => sale.date);
        const dailySalesData = dailySales.map(sale => sale.total);

        const myTotalIncomeChart = new Chart(totalIncomeChartCtx, {
            type: 'bar',
            data: {
                labels: dailySalesLabels,
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: dailySalesData,
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        // // Préparer les données pour le graphique des ventes journalières
        // const dailySalesChartCtx = document.getElementById('dailySalesChart').getContext('2d');
        // const dailySalesChart = new Chart(dailySalesChartCtx, {
        //     type: 'line',
        //     data: {
        //         labels: dailySalesLabels,
        //         datasets: [{
        //             label: 'Daily Sales',
        //             data: dailySalesData,
        //             backgroundColor: 'rgba(54, 162, 235, 0.2)',
        //             borderColor: 'rgba(54, 162, 235, 1)',
        //             borderWidth: 1,
        //             fill: true
        //         }]
        //     },
        //     options: {
        //         responsive: true,
        //         scales: {
        //             yAxes: [{
        //                 ticks: {
        //                     beginAtZero: true
        //                 }
        //             }]
        //         }
        //     }
        // });
        // Sparkline chart
        $('#lineChart').sparkline(dailySalesData, {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
</body>

</html>
