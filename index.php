<?php
  include_once("Navbar/nav.php");
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
        <?php if($programmes) :  ?>
        <!-- Jour 1 -->
         <?php foreach($programmes as $programme) :  ?>
        <div class="day-schedule"  data-aos="fade-down-right">
          <div class="day-header">
            <h3 class="day-date"><?= htmlspecialchars($programme["date"]) ?></h3>
          </div>
          <div class="day-events">
            <div class="event">
              <p class="event-time"><?= htmlspecialchars($programme["heureStart"]) ?> <span> - </span><?= htmlspecialchars($programme["heureEnd"]) ?></p>
              
              <p class="event-title">Lieu: <?= htmlspecialchars($programme["lieu"]) ?></p>
            
              
              <p class="event-title">Activité :  <?= htmlspecialchars($programme["activity"]) ?></p>
            </div>
          </div>
        </div>
          <?php endforeach; ?>

        <?php else : ?>
        <tr>
            <td colspan="6" class="text-center py-3 px-4">Aucun programme établie pour le moment.</td>
        </tr>
    <?php endif; ?>
        
      </div>
    </div>
  </section>


 <div>
  <h2 style="text-align: center; margin: 15px 0;">Les évènements</h2>
  <section class="articles">
  <?php if($events) : ?>
    <?php foreach($events as $event) : ?>
      <article>
      <div class="article-wrapper">
        <figure>
          <img src="EventPhoto/<?= htmlspecialchars($event['imgCover']) ?>" alt="<?= htmlspecialchars($event["titleEvent"]) ?>" />
        </figure>
        <div class="article-body">
          <h2><?= htmlspecialchars($event["titleEvent"]) ?></h2>
          <p>
          <?= htmlspecialchars($event["shortEvent"]) ?>
          </p>
          <a href="#" class="read-more">
            Lire plus <span class="sr-only"></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6" class="text-center py-3 px-4">Aucun évènement programmé pour le moment.</td>
        </tr>
    <?php endif; ?>
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
    <?php if($galleries) : ?>
      <?php foreach($galleries as $gallerie) : ?>
    <div class="item">
      <img src="gallery/<?= htmlspecialchars($gallerie["photo"]) ?>" width="400px" height="380px" alt="<?= htmlspecialchars($gallerie["title"]) ?>">
    </div>
   <?php endforeach; ?>
    <?php else: ?>
      <p>Aucune image disponible dans la gallerie!</p>
    <?php endif; ?>
    <div>
    </div>
   </section>


  <section id="partners" class="partners-section">
    <div class="container">
      <h2 class="partners-title" data-aos="fade-down">Nos Partenaires</h2>
      <div class="partners-grid">
      <?php  if($partenaires): ?>
        <?php foreach($partenaires as $partenaire) : ?>
        <div class="partner-logo" data-aos="fade-left">
          <img src="partenaire/<?= htmlspecialchars($partenaire["photo"]) ?>" alt="<?= htmlspecialchars($partenaire["title"]) ?>" class="partner-image">
        </div>
        <?php endforeach; ?>
        
        <?php else : ?>
        <tr>
            <td colspan="6" class="text-center py-3 px-4">Aucun partenaire pour le moment.</td>
        </tr>
       <?php endif; ?>
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