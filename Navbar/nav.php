<?php
  require_once("config/db.php");
?>
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
          <a href="index.php" class="nav-link">Accueil</a>
          <a href="registration.php" class="nav-link">Inscription</a>
          <a href="contact.php" class="nav-link">Contact</a>
        </div>

        <button class="menu-toggle" onclick="toggleMenu()">
          <span class="menu-icon">&#9776;</span>
          <span class="close-icon" style="display: none;">&times;</span>
        </button>
      </div>

      <!-- Menu mobile -->
      <div class="mobile-menu" id="mobileMenu">
        <a href="#home" class="mobile-nav-link">Accueil</a>
        <a href="registration.php" class="mobile-nav-link">Inscription</a>
        <a href="contact.php" class="mobile-nav-link">Contact</a>
      </div>
    </div>
  </nav>