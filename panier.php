<?php
session_start();

$conn = new mysqli("localhost", "root", "", "ma_base");

$panier = $_SESSION['panier'] ?? [];

if (empty($panier)) {
    echo "Panier vide";
    exit;
}

// Transformer en string : 1,2,3
$ids = implode(',', $panier);

$sql = "SELECT * FROM produits WHERE id IN ($ids)";
$result = $conn->query($sql);
?>

<h1>Mon panier 🛒</h1>

<?php while($produit = $result->fetch_assoc()) { ?>

    <div>
        <h2><?= $produit['nom'] ?></h2>
        <p><?= $produit['prix'] ?> FCFA</p>
        <img src="<?= $produit['image'] ?>" width="100">
    </div>

<?php } ?>