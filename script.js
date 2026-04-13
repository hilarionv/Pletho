document.addEventListener("DOMContentLoaded", function () {

  // SPLIDE
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


  // AOS
  AOS.init({
      duration: 1500,
      once: true,
      offset: 80,
  });


  // MENU
  window.toggleMenu = function () {
      const menu = document.getElementById("fullMenu");
      menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
  };


  // FAQ
  const questions = document.querySelectorAll(".faq-question");

  questions.forEach(question => {
      question.addEventListener("click", () => {

          const answer = question.nextElementSibling;

          question.classList.toggle("active");

          if (answer.style.maxHeight) {
              answer.style.maxHeight = null;
          } else {
              answer.style.maxHeight = answer.scrollHeight + "px";
          }
      });
  });


  // PANIER
  let count = 0;
  const countSpan = document.getElementById('panier-count');
  const addBtn = document.getElementById('add-to-cart');

  if (addBtn && countSpan) {
      addBtn.addEventListener('click', () => {
          count++;
          countSpan.textContent = count;

          countSpan.classList.add('animate');
          setTimeout(() => countSpan.classList.remove('animate'), 200);
      });
  }

});
  
