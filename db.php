<?php
$host = "localhost";
$user = "root";
$password = "root"; // ⚠️ MAMP = root
$dbname = "pletho";

$conn = new mysqli($host, $user, $password, $dbname);

// Vérification connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>