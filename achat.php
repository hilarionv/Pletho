<?php
session_start();

// Vérifier si ID existe
if (!isset($_GET['id'])) {
    echo "Produit introuvable";
    exit;
}

// Sécuriser
$id = intval($_GET['id']);

// Connexion base de données
$conn = new mysqli("localhost", "root", "", "ma_base");

// Vérifier connexion
if ($conn->connect_error) {
    die("Erreur connexion");
}

// Requête
$sql = "SELECT * FROM produits WHERE id = $id";
$result = $conn->query($sql);

// Vérifier si produit existe
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
    <title><?= $produit['nom'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h2>PLETHO</h2>

    <a href="panier.php">
        🛒 Panier (<?= isset($_SESSION['panier']) ? count($_SESSION['panier']) : 0 ?>)
    </a>
</header>

<main style="padding: 40px;">

    <div style="display:flex; gap:50px;">

        <!-- IMAGE -->
        <div>
            <img src="<?= $produit['image'] ?>" style="width:300px;">
        </div>

        <!-- INFOS -->
        <div>
            <h1><?= $produit['nom'] ?></h1>
            <h3><?= $produit['prix'] ?> FCFA</h3>
            <p><?= $produit['description'] ?></p>

            <!-- AJOUT PANIER -->
            <a href="ajouter_panier.php?id=<?= $produit['id'] ?>">
                <button style="padding:10px 20px; cursor:pointer;">
                    Ajouter au panier 🛒
                </button>
            </a>
        </div>

    </div>

</main>

</body>
</html>
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