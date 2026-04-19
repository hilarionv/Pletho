document.addEventListener("DOMContentLoaded", function () {

    // SPLIDE
    new Splide(".imprimantes", {
        perPage: 3,
        gap: "30px",
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
    document.querySelectorAll('.add-cart').forEach(btn => {
      btn.addEventListener('click', (e) => {
          e.preventDefault();
  
          let id = btn.dataset.id;
  
          fetch('ajouterpanier.php', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/x-www-form-urlencoded'
              },
              body: 'id=' + id
          })
          .then(() => {
              let countSpan = document.getElementById('panier-count');
              countSpan.textContent = parseInt(countSpan.textContent) + 1;
          });
      });
  });
    
  
  });
  
  function toggleMenu() {
    const menu = document.getElementById("fullMenu");
    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }
  }
    
  