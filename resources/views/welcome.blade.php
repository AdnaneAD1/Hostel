<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>River Of Land</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="#"><img src="assets/img/logo-river.png" alt="logo" style="font-size: 30px;"/></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Acceuil</a></li>
          <li><a href="#about">A propos</a></li>
          <li><a href="#service">Nos Services</a></li>
          <li><a href="#explore">Nos chambres</a></li>
          <li><a href="#contact">Contactez-nous</a></li>
        </ul>
     <button class="btn nav__btn">Réserver Maintenant</button>

      </nav>
      <div class="section__container header__container" id="home">
        <p>Simple - Unique - Amusant</p>
        <h1>River Of Land<br />Pour des vacances <span>agréable</span>.</h1>
      </div>
    </header>

 
<section class="section__container booking__container">
  <form action="/" class="booking__form">
    <div class="input__group">
      <span><i class="ri-calendar-2-fill"></i></span>
      <div>
        <label for="check-in">ARRIVÉE</label>
        <input type="text" placeholder="Arrivée" />
      </div>
    </div>
    <div class="input__group">
      <span><i class="ri-calendar-2-fill"></i></span>
      <div>
        <label for="check-out">DÉPART</label>
        <input type="text" placeholder="Départ" />
      </div>
    </div>
    <div class="input__group">
      <span><i class="ri-user-fill"></i></span>
      <div>
        <label for="guest">INVITÉS</label>
        <input type="text" placeholder="Invités" />
      </div>
    </div>
    <div class="input__group input__btn">
      <button class="btn">VÉRIFIER</button>
    </div>
  </form>
</section>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="assets/img/about.jpg" alt="about" />
      </div>
     <div class="about__content">
  <p class="section__subheader">À PROPOS DE NOUS</p>
  <h2 class="section__header">Les Meilleures Vacances Commencent Ici !</h2>
  <p class="section__description">
    Avec un accent sur des hébergements de qualité, des expériences personnalisées et des réservations fluides, notre structure est dédiée à garantir que chaque client commence ses vacances de rêve ou ses moments de repos en toute confiance et excitation.
  </p>
  <div class="about__btn">
    <button class="btn">En Savoir Plus</button>
  </div>
</div>

    </section>

    <section class="section__container room__container">
   <p class="section__subheader">NOTRE SALON</p>
<h2 class="section__header">Le Temps de Repos le Plus Mémorable Commence Ici.</h2>

      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img src="assets/img/room-1.jpg" alt="room" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-paint-fill"></i></span>
              <span><i class="ri-shield-star-line"></i></span>
            </div>
          </div>
          <div class="room__card__details">
            <h4>Deluxe Ocean View</h4>
            <p>
              Bask in luxury with breathtaking ocean views from your private
              suite.
            </p>
            <h5>Starting from <span>$299/night</span></h5>
            <button class="btn">Réserver Maintenant</button>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="assets/img/room-2.jpg" alt="room" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-paint-fill"></i></span>
              <span><i class="ri-shield-star-line"></i></span>
            </div>
          </div>
          <div class="room__card__details">
            <h4>Executive Cityscape Room</h4>
            <p>
              Experience urban elegance and modern comfort in the heart of the
              city.
            </p>
            <h5>Starting from <span>$199/night</span></h5>
            <button class="btn">Réserver Maintenant</button>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="assets/img/room-3.jpg" alt="room" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
              <span><i class="ri-paint-fill"></i></span>
              <span><i class="ri-shield-star-line"></i></span>
            </div>
          </div>
          <div class="room__card__details">
            <h4>Family Garden Retreat</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$249/night</span></h5>
            <button class="btn">Réserver Maintenant</button>
          </div>
        </div>
      </div>
    </section>
<button class="btn" style="display: block; margin: 0 auto; margin-bottom:4%;">Voir plus +</button>


   <section class="service" id="service">
  <div class="section__container service__container">
    <div class="service__content">
      <p class="section__subheader">SERVICES</p>
      <h2 class="section__header">N'aspirez qu'au meilleur.</h2>
      <ul class="service__list">
        <li>
          <span><i class="ri-shield-star-line"></i></span>
          Sécurité de haute classe
        </li>
        <li>
          <span><i class="ri-24-hours-line"></i></span>
          Service de chambre 24 heures sur 24
        </li>
        <li>
          <span><i class="ri-map-2-line"></i></span>
          Restauration offerte
        </li>
      </ul>
    </div>
  </div>
</section>


  <section class="section__container banner__container">
  <div class="banner__content">
    <div class="banner__card">
      <h4>8+</h4>
      <p>Chmabres Disponibles</p>
    </div>
    <div class="banner__card">
      <h4>350+</h4>
      <p>Réservations Complétées</p>
    </div>
    <div class="banner__card">
      <h4>60+</h4>
      <p>Clients Satisfaits</p>
    </div>
  </div>
</section>


  <section class="explore" id="explore">
  <p class="section__subheader">DÉCOUVRIR</p>
  <h2 class="section__header">Les Nouveautés Aujourd'hui.</h2>
  <div class="explore__bg">
    <div class="explore__content">
      <p class="section__description">20 JUN 2024</p>
      <h4>Un Nouveau Menu Est Disponible Dans Notre Structure.</h4>
      <button class="btn">Continuer</button>
    </div>
  </div>
</section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="#home"><img src="assets/img/logo-river.png" alt="logo" /></a>
          </div>
          <p class="section__description">
         Découvrez un monde de confort, de luxe et d'aventure en explorant nos chambres soigneusement concu pour vous.
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
            <a href="#"><img src="assets/img/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="assets/img/instagram.png" alt="instagram" /></a>
            <a href="#"><img src="assets/img/youtube.png" alt="youtube" /></a>
            <a href="#"><img src="assets/img/twitter.png" alt="twitter" /></a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 River Of Land. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
