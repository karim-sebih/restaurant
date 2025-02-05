<?php
$host = 'localhost';
$db = 'restaurant';
$user = 'root';
$pass = '';

try {
    // Essayer de se connecter à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    // Définir le mode d'erreur pour lancer des exceptions en cas de problème
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Afficher un message de succès pour le test
    //echo "Connexion réussie à la base de données.";
    
} catch (PDOException $e) {
    // Afficher un message d'erreur en cas d'échec de la connexion
    die("Connection failed: " . $e->getMessage());
}



?>
