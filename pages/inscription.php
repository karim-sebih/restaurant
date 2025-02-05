<?php

include("../utils/config.php");

$message = '';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO restaurateurs (username, email , password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(['username' => $username , 'email' => $email, 'password' => $password]);

    if ($result) {
        $message = 'Inscription réussie!';
        header('Location: connexion.php');
    } else {
        $message = 'Erreur lors de l\'inscription.';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/connexion.css">
    
</head>

<body>
    <main>
        <div class="formulaire">
            <div class="container_card2">

                <form action="" method="post">
                    <div class="tittle">
                        <h2>Inscription</h2>
                    </div>
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Nom">

                    <label for="email"></label>
                    <input type="email" name="email" placeholder="Email">

                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Mot de passe">

                    <input type="submit" value="S'inscrire" class="button2">

                    <p class="inscription"> "Avez vous déjà un compte ?"
                        <a href="connexion.php">Connexion</a>
                    </p>
                </form>
            </div>
        </div>
    </main>
</body>

</html>