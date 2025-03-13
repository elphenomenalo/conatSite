function toggleMenu() {
    const mobileMenu = document.getElementById("mobileMenu");
    const menuIcon = document.querySelector(".menu-icon");
    const closeIcon = document.querySelector(".close-icon");
  
    mobileMenu.classList.toggle("active");
  
    if (mobileMenu.classList.contains("active")) {
      menuIcon.style.display = "none";
      closeIcon.style.display = "inline";
    } else {
      menuIcon.style.display = "inline";
      closeIcon.style.display = "none";
    }
  }