<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JCI Togo - CONAT 2025</title>
  <link rel="stylesheet" href="style.css">
  <!-- Lien de swipper wrapper -->
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<!-- Lien du aos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Font-awesone -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-content">
        <div class="logo">
          <img src="images/p1.png" alt="JCI Togo Logo" class="logo-img">
        </div>

        <div class="nav-links">
          <a href="#home" class="nav-link">Accueil</a>
          <a href="#about" class="nav-link">À propos</a>
          <a href="#program" class="nav-link">Programme</a>
          <a href="#registration" class="nav-link">Inscription</a>
          <a href="#partners" class="nav-link">Partenaires</a>
          <a href="#contact" class="nav-link">Contact</a>
        </div>

        <button class="menu-toggle" onclick="toggleMenu()">
          <span class="menu-icon">&#9776;</span>
          <span class="close-icon" style="display: none;">&times;</span>
        </button>
      </div>

      <!-- Menu mobile -->
      <div class="mobile-menu" id="mobileMenu">
        <a href="#home" class="mobile-nav-link">Accueil</a>
        <a href="#about" class="mobile-nav-link">À propos</a>
        <a href="#program" class="mobile-nav-link">Programme</a>
        <a href="#registration" class="mobile-nav-link">Inscription</a>
        <a href="#partners" class="mobile-nav-link">Partenaires</a>
        <a href="#contact" class="mobile-nav-link">Contact</a>
      </div>
    </div>
  </nav>


  <?php
    include_once("Fonctionnalty/userRegister.php");
  ?>
  <section id="home" class="hero-section">
    <div class="hero-background">
      <img
        src="images/portrait-professor-work-educational-system.jpg"
        alt="CONAT 2025"
        class="hero-image"
      />
      <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
      <div class="logo">
        <img src="images/logo .png" alt="JCI Togo Logo" data-aos="fade-down" class="logo-img log">
      </div>
      <div data-aos="fade-up">
        <h1 class="hero-title">CONAT 2025</h1>
      <p class="hero-subtitle">Agir et apporter des solutions durables</p>
      <p class="hero-date">17-19 Avril 2025</p>
      <div class="hero-cta">
        <a href="#registration" class="cta-button">
          Inscrivez-vous maintenant
          <i data-lucide="chevron-right" class="cta-icon"></i>
        </a>
      </div>
      </div>
    </div>
  </section>


  <section id="about" class="about-section">
    <div class="container">
      <div class="about-header" data-aos="fade-up-right">
        <h2 class="about-title">À propos du CONAT 2025</h2>
        <p class="about-description">
          Le Conseil National est l'événement phare de la JCI Togo, rassemblant les jeunes leaders pour façonner l'avenir.
        </p>
      </div>

      <div class="about-values">
        <div class="value-card" data-aos="zoom-in-up">
          <h3 class="value-title">Vision</h3>
          <p class="value-description">Être le principal réseau de jeunes citoyens actifs au Togo</p>
        </div>
        <div class="value-card" data-aos="zoom-in-up" data-oas-duration="2000">
          <h3 class="value-title">Mission</h3>
          <p class="value-description">Offrir des opportunités de développement aux jeunes pour créer des changements positifs</p>
        </div>
        <div class="value-card" data-aos="zoom-in-up" data-oas-duration="4000">
          <h3 class="value-title">Valeurs</h3>
          <p class="value-description">Foi en Dieu, fraternité humaine, service à l'humanité</p>
        </div>
      </div>
    </div>
  </section>


  <section id="program" class="program-section">
    <div class="container">
      <h2 class="program-title" data-aos="zoom-in">Programme</h2>

      <div class="program-schedule">
        <!-- Jour 1 -->
        <div class="day-schedule"  data-aos="fade-down-right">
          <div class="day-header">
            <h3 class="day-date">17 Avril 2025</h3>
          </div>
          <div class="day-events">
            <div class="event">
              <p class="event-time">09:00</p>
              <p class="event-title">Cérémonie d'ouverture</p>
            </div>
            <div class="event">
              <p class="event-time">10:30</p>
              <p class="event-title">Conférence: Leadership et Innovation</p>
            </div>
            <div class="event">
              <p class="event-time">14:00</p>
              <p class="event-title">Ateliers thématiques</p>
            </div>
          </div>
        </div>

        <!-- Jour 2 -->
        <div class="day-schedule" data-aos="fade-up" data-oas-delay="2000">
          <div class="day-header">
            <h3 class="day-date">18 Avril 2025</h3>
          </div>
          <div class="day-events">
            <div class="event">
              <p class="event-time">09:00</p>
              <p class="event-title">Sessions de formation</p>
            </div>
            <div class="event">
              <p class="event-time">14:00</p>
              <p class="event-title">Table ronde: Développement durable</p>
            </div>
            <div class="event">
              <p class="event-time">19:00</p>
              <p class="event-title">Soirée de gala</p>
            </div>
          </div>
        </div>

        <!-- Jour 3 -->
        <div class="day-schedule" data-aos="fade-down-left" data-oas-delay="4000">
          <div class="day-header">
            <h3 class="day-date">19 Avril 2025</h3>
          </div>
          <div class="day-events">
            <div class="event">
              <p class="event-time">09:00</p>
              <p class="event-title">Assemblée générale</p>
            </div>
            <div class="event">
              <p class="event-time">14:00</p>
              <p class="event-title">Élections</p>
            </div>
            <div class="event">
              <p class="event-time">16:00</p>
              <p class="event-title">Cérémonie de clôture</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 <div>
  <h2 style="text-align: center; margin: 15px 0;">Les évènements</h2>
  <section class="articles">

    <article>
      <div class="article-wrapper">
        <figure>
          <img src="https://picsum.photos/id/1011/800/450" alt="" />
        </figure>
        <div class="article-body">
          <h2>This is some title</h2>
          <p>
            Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="https://picsum.photos/id/1005/800/450" alt="" />
        </figure>
        <div class="article-body">
          <h2>This is some title</h2>
          <p>
            Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="https://picsum.photos/id/103/800/450" alt="" />
        </figure>
        <div class="article-body">
          <h2>This is some title</h2>
          <p>
            Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
  </section>
 </div>
  <!-- <section>
    <div class="container">
      <h2 class="program-title" data-aos="zoom-in"> Nos Organisations locales </h2>
      <p style="text-align: center;">
        Nous collaborons avec 13 organisations locales engagées dans le développement et l’innovation. Découvrez leurs contributions et les 
        dirigeants qui les représentent. Ces organisations jouent un rôle clé dans notre écosystème et nous sommes fiers de les mettre en avant.
      </p>
      <div class="row">
          <div class="col-md-4 col-sm-6" data-aos="fade-left">
              <div class="our-team">
                  <div class="team-image">
                      <img src="im1.jpg">
                      <p class="description">
                        <img src="p1.png" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 2px solid #fff;" />
                      </p>
                      <ul class="social">
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      </ul>
                  </div>
                  <div class="team-info">
                      <h3 class="title">Eugenie NEMY</h3>
                      <span class="post">Présidente de la JCI Lomé Cocotier</span>
                  </div>
              </div>
          </div>
   
          <div class="col-md-4 col-sm-6"  data-aos="fade-down">
            <div class="our-team">
                <div class="team-image">
                    <img src="im1.jpg">
                    <p class="description">
                      <img src="p1.png" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 2px solid #fff;" />

                    </p>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="team-info">
                    <h3 class="title">Eugenie NEMY</h3>
                    <span class="post">Présidente de la JCI Lomé Cocotier</span>
                </div>
            </div>
        </div>
          <div class="col-md-4 col-sm-6"  data-aos="fade-up">
            <div class="our-team">
                <div class="team-image">
                    <img src="im1.jpg">
                    <p class="description">
                      <img src="p1.png" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 2px solid #fff;" />

                    </p>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="team-info">
                    <h3 class="title">Eugenie NEMY</h3>
                    <span class="post">Présidente de la JCI Lomé Cocotier</span>
                </div>
            </div>
        </div>
      </div>
  </div>
  </section> -->


  <!-- Gallery -->
   <section style="margin: 45px 0;">
    <div>
      <h2 class="program-title" data-aos="zoom-in" data-aos="fade-down">Gallerie</h2>
    </div>
    <div class="gallerys" data-aos="fade-down">
    <input type="radio" name="position" checked />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    
  <div id="carousel">
    <div class="item">
      <img src="images/FT_-305.jpg" width="400px" height="380px" alt="image">
    </div>
    <div class="item">
      <img src="images/FT_-306.jpg" width="400px" height="380px" alt="image">
    </div>
    <div class="item">
      <img src="images/FT_-307.jpg" width="400px" height="380px" alt="image">
    </div>
    <div class="item">
      <img src="images/FT_-308.jpg" width="400px" height="380px" alt="image">
    </div>
    <div class="item">
      <img src="images/FT_-309.jpg" width="400px" height="380px" alt="image">
    </div>
    <div class="item">
      <img src="images/FT_-310.jpg" width="400px" height="380px" alt="image">
    </div>
    <div>
    </div>
   </section>


  <section id="registration" class="registration-section">
    <div class="container">
      <div class="registration-form">
        <h2 class="registration-title" data-aos="fade-up-right">Inscription</h2>

        <?php
          if(isset($msg)){
            echo '<p class="message">' .$msg. '</p>';
          }elseif(isset( $msgSuccess)){
            echo '<p class="msgSuccess">'.  $msgSuccess .'</p>';
          }
        ?>

        <form id="registrationForm" class="form" data-aos="fade-down-left" method="POST">
          <div class="form-grid">
            <!-- Nom -->
            <div class="form-group">
              <label for="lastName" class="form-label">Nom</label>
              <input
                type="text"
                id="lastName"
                name="lastName"
                class="form-input"
                
              />
            </div>

            <!-- Prénoms -->
            <div class="form-group">
              <label for="firstName" class="form-label">Prénoms</label>
              <input
                type="text"
                id="firstName"
                name="firstName"
                class="form-input"
                
              />
            </div>

            <!-- Organisation locale -->
            <div class="form-group">
              <label for="organization" class="form-label">Organisation locale</label>
              <input
                type="text"
                id="organization"
                name="organization"
                class="form-input"
                
              />
            </div>

            <!-- Titre -->
            <div class="form-group">
              <label for="title" class="form-label">Titre</label>
              <select id="title" name="title" class="form-input">
                <option value="">Sélectionnez une option</option>
                <option value="member">Membre actif</option>
                <option value="potential">Membre potentiel</option>
                <option value="past">Past président</option>
                <option value="senator">Sénateur</option>
                <option value="guest">Invité</option>
                <option value="partner">Partenaire</option>
              </select>
            </div>

            <!-- Email -->
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-input"
                
              />
            </div>

            <!-- Téléphone -->
            <div class="form-group">
              <label for="phone" class="form-label">Téléphone</label>
              <input
                type="text"
                id="phone"
                name="phone"
                class="form-input"
                
              />
            </div>
          </div>

          <!-- Message -->
          <div class="form-group">
            <label for="message" class="form-label">Message (optionnel)</label>
            <textarea
              id="message"
              name="message"
              rows="4"
              class="form-input"
            ></textarea>
          </div>

          <!-- Bouton de soumission -->
          <div class="form-group">
            <button type="submit" name="userSubmit" class="submit-button">
              S'inscrire
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <section id="partners" class="partners-section">
    <div class="container">
      <h2 class="partners-title" data-aos="fade-down">Nos Partenaires</h2>
      <div class="partners-grid" style="margin: 0 auto;">
      
        <div class="partner-logo" data-aos="fade-left">
          <img src="images/p4.png" alt="Partner 3" class="partner-image">
        </div>
        <!-- <div class="partner-logo">
          <img src="https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?w=200&h=100&fit=crop" alt="Partner 4" class="partner-image">
        </div> -->
      </div>

      <div class="partnership-cta" data-aos="flip-left">
        <h3 class="cta-title">Devenez Partenaire</h3>
        <p class="cta-description">
          Rejoignez-nous dans cette aventure exceptionnelle et contribuez au développement du leadership jeune au Togo.
          Découvrez nos différentes opportunités de partenariat.
        </p>
        <a href="#contact" class="cta-button">Contactez-nous</a>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-section">
    <div class="container">
      <h2 class="contact-title" data-aos="fade-down">Contact</h2>

      <div class="contact-content">
        <div class="contact-info" data-aos="fade-right">
          <div class="info-item">
            <i data-lucide="mail" class="info-icon"></i>
            <div class="info-text">
              <p class="info-label">Email</p>
              <p class="info-value">vpenjcitogo@gmail.com</p>
            </div>
          </div>

          <div class="info-item">
            <i data-lucide="phone" class="info-icon"></i>
            <div class="info-text">
              <p class="info-label">Téléphone</p>
              <p class="info-value">+228 90 61 00 40 | +228 98 68 43 14</p>
            </div>
          </div>

          <!-- <div class="info-item">
            <i data-lucide="map-pin" class="info-icon"></i>
            <div class="info-text">
              <p class="info-label">Adresse</p>
              <p class="info-value">123 Rue Example, Lomé, Togo</p>
            </div>
          </div> -->

          <div class="social-links">
            <h3 class="social-title">Suivez-nous</h3>
            <div class="social-icons">
              <a href="https://facebook.com" class="social-icon" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="https://instagram.com" class="social-icon" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="https://linkedin.com" class="social-icon" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form" data-aos="fade-left">
          <h3 class="form-title">Envoyez-nous un message</h3>
          <form class="form">
            <div class="form-group">
              <label for="name" class="form-label">Nom complet</label>
              <input type="text" id="name" name="name" class="form-input" required>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-input" required>
            </div>
            <div class="form-group">
              <label for="message" class="form-label">Message</label>
              <textarea id="message" name="message" rows="4" class="form-input" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="submit-button">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer" data-aos="fade-up">
    <div class="container">
      <div class="footer-grid">
        <!-- Logo et description -->
        <div class="footer-section">
          <img
            src="images/logo .png"
            alt="JCI Togo Logo"
            class="footer-logo"
            data-aos="fade-right"
          />
          <p class="footer-text">
            Jeune Chambre Internationale Togo
          </p>
        </div>

        <!-- Liens utiles -->
        <div class="footer-section">
          <h3 class="footer-heading">Liens utiles</h3>
          <ul class="footer-links">
            <li><a href="/mentions-legales" class="footer-link">Mentions légales</a></li>
            <li><a href="/confidentialite" class="footer-link">Politique de confidentialité</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="footer-section">
          <h3 class="footer-heading">Contact</h3>
          <ul class="footer-links">
            <li class="footer-text">Email: vpenjcitogo@gmail.com</li>
            <li class="footer-text">Tél: +228 90 61 00 40 | +228 98 68 43 14</li>
          </ul>
        </div>
      </div>

      <!-- Copyright -->
      <div class="footer-copyright">
        <p class="footer-text">
          © JCI Togo 2025 - Tous droits réservés
        </p>
      </div>
    </div>
  </footer>
  <script src="script.js"></script>
  <!-- Lien de swipper wrapper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Lien su aos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>