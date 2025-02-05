<?php
session_start();

include("..//utils/config.php");


$message = '';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username =   htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM restaurateurs WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
    } else {
        $message = 'Mauvais identifiants';
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
            <div class="container_card">

                <form action="" method="post">
                    <div class="tittle">
                        <h2>Connexion</h2>
                    </div>
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Username..." required>

                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Mot de passe">

                    <label for="email"></label>
                    <input type="email" name="email" placeholder="Email">
                  
                        <input type="submit" value="Se connecter" class="button">
                   
                    <p class="inscription"> "Vous n'avez pas de compte"
                        <a href="inscription.php">Inscription</a>
                    </p>
                </form>
            
            </div>
        </div>
    </main>
</body>


<footer>

    <!-- footer -->

</footer>

</html>