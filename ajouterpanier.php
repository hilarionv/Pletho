<?php
session_start();

if (!isset($_GET['id'])) {
    header("Location: index.html");
    exit;
}

$id = intval($_GET['id']);

// Créer panier si n'existe pas
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Ajouter produit
$_SESSION['panier'][] = $id;

// Retour à la page produit
header("Location: achat.php?id=" . $id);
exit;
?>