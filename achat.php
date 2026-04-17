<?php
session_start();
include 'db.php';

if (!isset($_GET['id'])) {
    echo "Produit introuvable";
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM produits WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Produit non trouvé";
    exit;
}

$produit = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body>
<header>
  
<div class="top">
            <div class="logo">
                <a href=""><img src="images/Photoroom_20260403_161500.PNG" alt="" style="height: 75px;"></a>
            </div>
        
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">ACCEUIL</a></li>
                    <li><a href="telephone.html">TELEPHONE</a></li>
                    <li><a href="ordinateurs.html">PC</a></li>
                    <li><a href="imprimantes.html">IMPRIMANTES</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        
            <!-- PANIER + BURGER groupés ensemble -->
            <div class="right-controls">
                <div class="icones">
                    <a href="/panier" id="panier-icon">
                        <i class="ra ra-shopping-cart"></i>
                        <span id="panier-count">0</span>
                    </a>
                    <button id="add-to-cart" style="font-size: 17px;">🛒</button>
                </div>
                <div class="burger" onclick="toggleMenu()">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        
            <div class="full-menu" id="fullMenu">
        <span onclick="toggleMenu()" style="color: white; padding-bottom: 60px; font-weight: 700; font-size: 20px; cursor: pointer;">X</span>
        <a href="index.html#home" onclick="toggleMenu()">ACCEUIL</a>
        <a href="" onclick="toggleMenu()">TELEPHONE</a>
        <a href="ordinateurs.html" onclick="toggleMenu()">ORDINATEURS</a>
        <a href="imprimantes.html" onclick="toggleMenu()">IMPRIMANTES</a>
        <a href="services.html" onclick="toggleMenu()">SERVICES</a>
        <a href="index.html#contact" onclick="toggleMenu()">CONTACT</a>
    </div>
        </div>


  </div>
</header>

    <main>
        <div class="ssss">
            <div class="image-produit">
            <img src="<?= $produit['image'] ?>" style="width:400px;">
            </div>
    
            <div class="textt" style="text-align: start; padding-top: 50px; flex: 1">
                <div class="details">
                    <h1><?= $produit['nom'] ?></h1>
                    <h3><?= $produit['prix'] ?> FCFA</h3>
                    <p><?= $produit['description'] ?></p>
                </div>
                <div class="buttooon">
                    <button class="add-cart" style="width: 150px;">Ajouter au panier</button>
                </div>
            <div class="faq">
         
                
               
          
                    <!-- Question 2 -->
                    <div class="faq-item">
                        <button class="faq-question">
                          ENTRETION
                            <span class="arrow">▼</span>
                        </button>
                        <div class="faq-answer">
                            <p>La livraison est aux frais du client et s’effectue dans un délai maximum de 3 jours selon la localisation.</p>
                        </div>
                    </div>
                
                    <!-- Question 3 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            Vendez-vous en gros ou seulement en détail ?
                            <span class="arrow">▼</span>
                        </button>
                        <div class="faq-answer">
                            <p>Nous proposons la vente en gros pour les entreprises et organisations, ainsi que la vente en détail pour les particuliers.</p>
                        </div>
                    </div>
                
                    <!-- Question 4 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            Proposez-vous un service après-vente ?
                            <span class="arrow">▼</span>
                        </button>
                        <div class="faq-answer">
                            <p>Oui, nous offrons un service après-vente incluant diagnostic, réparation et assistance technique.</p>
                        </div>
                    </div>
                
                    <!-- Question 5 -->
                    <div class="faq-item">
                        <button class="faq-question">
                            Les produits sont-ils garantis ?
                            <span class="arrow">▼</span>
                        </button>
                        <div class="faq-answer">
                            <p>Certains produits disposent d’une garantie. Les détails sont précisés sur chaque fiche produit.</p>
                        </div>
                    </div>
                
             
      
          
                
             
                
           
                
         
            </div>
        </div>
    </div>
</main>
<footer>

    <div class="foot">
        <div class="PLETHO">
            <h3>PLETHO.</h3>
        </div>
        <div class="others">
    <ul>
        <li><a href="">FAQ</a></li>
        <li><a href="">SERVICE APRÉS VENTE</a></li>
        <li><a href="">ORDINATEURS</a></li>
        <li><a href="Imprimantes"></a></li>
    </ul>
        </div>
    
        <div class="RS">
            <i> <a href="" class="fa-brands fa-instagram"></a></i>
            <i> <a href="" class="fa-brands fa-whatsapp"></a></i>
        </div>
    
    </div>
    <hr>
       <p style="text-align: center;"> &copy; All rights reserved! Hilarion Vitin.</p>
    </footer>
<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({
duration: 1700,
once: true,
offset: 80,

});
</script>
</body>
</html>







