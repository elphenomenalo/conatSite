<?php
  include_once("Navbar/nav.php");
?>


    <?php
    include_once("Fonctionnalty/userRegister.php");
  ?>

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

    <footer class="footer" data-aos="fade-up">
        <div class="container">
            <div class="footer-grid">
                <!-- Logo et description -->
                <div class="footer-section">
                    <img
                        src="images/logo .png"
                        alt="JCI Togo Logo"
                        class="footer-logo"
                        data-aos="fade-right" />
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