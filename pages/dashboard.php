<?php
session_start();
var_dump($_SESSION);
if (!isset($_SESSION['user_id'])) {
    header('Location: connexion.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="connexion.css">
</head>

<body>
    <section>
        <div class="container">
            <h2 class="msg-bienvenue">Bienvenue sur votre tableau de bord</h2>
            <p class="access">Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à nos utilisateurs inscrits.</p>
            <a href="index.php">Se déconnecter</a>
        </div>
    </section>

</body>

</html>