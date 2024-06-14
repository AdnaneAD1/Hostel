<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Enjoy Vacations With Luxury Hotel</h1>
            <button>Explore Services</button>
        </div>
    </header>

    <section>
        <div class="elementor-widget-container">
        <div>
            <form class="ovabrw-search-form">
                <div class="form-sub-heading">
                    Booking Your Room
                </div>

                <h2 class="form-heading">
                    Find &amp; Booked Your Room
                </h2>

                <div class="ovabrw-s-field">
                    <div class="search-field">
                        <div class="ovabrw-label">
                            <span class="label">Check-in</span>
                        </div>
                        <div class="ovabrw-input">
                            <input type="date">
                        </div>
                    </div>

                    <div class="search-field">
                        <div class="ovabrw-label">
                            <span class="label">Check-out</span>
                        </div>
                        <div class="ovabrw-input">
                            <input type="date">
                        </div>
                    </div>

                    <div class="search-field">
                        <div class="ovabrw-label">
                            <span class="label">Adults</span>
                        </div>
                        <div class="ovabrw-input">
                            <input type="number" value="1" min="1" max="5">
                        </div>
                    </div>

                    <div class="search-field">
                        <div class="ovabrw-label">
                            <span class="label">Children</span>
                        </div>
                        <div class="ovabrw-input">
                            <input type="number" value="0" min="0" max="4">
                        </div>
                    </div>

                    <div class="search-field ovabrw-search-btn">
                        <input type="hidden" value="true">
                        <button class="ovabrw-btn" type="submit">
                            Search Now<i aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-list">
                <div class="service">Transportation</div>
                <div class="service">SPA & GYM</div>
                <div class="service">Free Wifi</div>
                <div class="service">Food & Drink</div>
                <div class="service">Swimming Pool</div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>World Class Luxury Hotel & Restaurant Near City and Best Host For Your Comfort.</p>
            <button>Learn More</button>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Luxury Hotel. All rights reserved.</p>
        </div>
    </footer>
</body>
<script src="{{ asset('assets/js/scripts.js')}}"></script>
</html>
