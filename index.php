<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../restaurant/css/pc2.css">
    <script src="https://kit.fontawesome.com/ca3234fc7d.js" crossorigin="anonymous"></script>
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">




    <title>Acceuil</title>
</head>

<body>
<header>
        <div class="navbar">
            <div class="logo">
                <a href="../index.php">
                    <img src="./images/pizza country logo.png" height= '100'alt="logo matcha tea" >
                </a>
            </div>
            <ul class="links">
                <li><a href="./pages/ventes.php">Vente</a></li>
               
                <li><a href="./pages/contact.php">Contact</a></li>
            </ul>
            <div class="box">
                <a href="#">
                    <input type="search" placeholder="search...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            <div class="buttons">
                <a href="./pages/profil.php" class="action-button-user">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="./pages/commandes.php" class="action-button-shop">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="./pages/co.php">Connexion</a>
            </div>
            <div class="burger-menu-button">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="burger-menu open">
            <ul class="links">
                <li><a href="./pages/ventes.php">Vente</a></li>
                
                <li><a href="./pages/contact.php">Contact</a></li>
                
                <div class="divider"></div>
                <div class="buttons-burger-menu">
                    <a href="./pages/profil.php" class="action-button-user">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="./pages/ommandes.php" class="action-button-shop">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <a href="./pages/co.php">Connexion</a>
                </div>
            </ul>
        </div>
    </header>

    <script>
        const burgerMenuButton = document.querySelector('.burger-menu-button');
        const burgerMenuButtonIcon = document.querySelector('.burger-menu-button i');
        const burgerMenu = document.querySelector('.burger-menu');

        burgerMenuButton.onclick = function () {
            burgerMenu.classList.toggle('open');
            const isOpen = burgerMenu.classList.contains('open');
            burgerMenuButtonIcon.classList = isOpen ? 'fa-solid fa-x' : 'fa-solid fa-bars';
        }
    </script>
    <main>
        <section class="Intro">
            <h2>Pizza Country</h2>
            <br>
            <h3>otre pâte est faite maison étalée et roulée à la main.
Chaque jour nous fabriquons sur place notre pâte et 24h de levage permette de lui assurer ses bords croustillants et sa légèreté.
Nous travaillons de façon artisanale avec des ingrédients frais et de qualité, une sauce tomate cuisinée, cuite durant 3 heures, car chez pizza country, votre satisfaction est notre priorité!</h3>
            <br>
            <a href="./pages/ventes.php" class="action_btn">VOIR LES PRODUITS</a>
        </section>
        <section class="part1">
            <img src="images//andalouse.jpg" alt="produit de matcha">
            <div class="text-box">
                <p>Depuis plus de 20 ans, Pizza Country conçoit des pizzas originales et artisanales.

La pâte traditionnelle, jamais congelée, est pétrie tous les jours dans chaque magasin. Les pizzas sont préparées devant vous par des pizzaiolos professionnels, gage de qualité. Les légumes sont aussi frais que les fromages sélectionnés qui ignorent la congélation.

Compositions gourmandes, service convivial, prix attractifs, livrés dans les meilleurs délais, telles sont les exigences des magasins de Pizza Country répartis entre les Alpes-Maritimes et le Var</p>
                <br>
                <br>
            </div>
        </section>
        <br>
        <section class="part2">
            <div class="text-box    ">
                <img src="images/4fromage.jpg" alt="matcha collagen de matcha & co">

                <p>Une envie de pizza ? N'hésitez plus. Commandez chez Pizza Country !

Leader de la livraison de pizzas à domicile depuis plus de 15 ans sur la région.

Une carte étudiée pour satisfaire tous les goûts, entre la classique "Reine" ou l'originale "Texane", vous pouvez même créer votre pizza selon vos envies.

Vous pouvez commander :
- par téléphone
- sur notre site internet

Nous vous livrons gratuitement du lundi au dimanche de 11h00 à 14h30 et de 18h00 à 23h00 (excepté le dimanche midi) à partir d'une pizza commandée.</p>
                <br>
                
                <br>
            </div>
        </section>
        <br>
        <br>
        
    </main>
    

    <footer>
        <div class="footerContainer">
            <div class="footerNav">
                <ul>
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="ventes.php">Vente</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footerBottom">
                <p>Copyright &copy;2025 ; Conçu par <span class="designer">Karim Sebih, Jorge Santos, Raïs Mahjoub, Mathis Robert</span></p>
            </div>
        </div>
    </footer>
    </footer>


</body>

</html>