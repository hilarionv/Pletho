document.addEventListener("DOMContentLoaded", function () {

    new Splide(".imprimantes", {
      perPage: 3,
      gap: "20px",
      breakpoints: {
        768: { perPage: 1 }
      }
    }).mount();
  
    new Splide(".ordinateurs", {
      perPage: 3,
      gap: "20px",
      breakpoints: {
        768: { perPage: 1 }
      }
    }).mount();
  
  });





    AOS.init({
        duration: 1500,
      once: true,
      offset: 80,

    });

    function toggleMenu() {
      const menu = document.getElementById("fullMenu");
      if (menu.style.display === "flex") {
          menu.style.display = "none";
      } else {
          menu.style.display = "flex";
      }
  }
  
