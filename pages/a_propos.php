<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/matcha1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/ca3234fc7d.js" crossorigin="anonymous"></script>
    </script>
    <title>a propos</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href=../acceuil.html>
                    <img src="../images/matcha tea en blanc.png" alt="logo matcha tea">
                </a>
            </div>
            <ul class="links">
                <li><a href="ventes.html">Vente</a></li>
                <li><a href="l'histoire.html">Histoire</a></li>
                <li><a href="a_propos.html">À propos</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="box">
                <a href="#">
                    <input type="search" br placeholder="search...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            <div class="buttons">
                <a href="profil.html" class="action-button-user">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="commandes.html" class="action-button-shop">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
            <div class="burger-menu-button">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="burger-menu open">
            <ul class="links">
                <li><a href="ventes.html">Vente</a></li>
                <li><a href="l'histoire.html">Histoire</a></li>
                <li><a href="a_propos.html">À propos</a></li>
                <li><a href="contact.html">Contact</a></li>
                <div class="divider"></div>
                <div class="buttons-burger-menu">
                    <a href="profil.html" class="action-button-user">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="commandes.html" class="action-button-shop">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </ul>
        </div>
    </header>
    <script>
        const burgerMenuButton = document.querySelector('.burger-menu-button ')
        const burgerMenuButtonIcon = document.querySelector('.burger-menu-button i')
        const burgerMenu = document.querySelector('.burger-menu')

        burgerMenuButton.onclick = function(){
            burgerMenu.classList.toggle('open')
            const isOpen = burgerMenu.classList.contains('open')
            burgerMenuButtonIcon.classList= isOpen ? 'fa-solid fa-x' :'fa-solid fa-bars' 
        }
        </script>
    <main>
        <div class="text-container">
            <!-- <h3 class="title">A propos</h3> -->
            <h1 class="name">MATCHA TEA</h1>
            <p class="slogan">“Une tasse de thé matcha rend tout meilleur”</p>
        </div>

        <div class="container2">
            <div class="description">
                <h3 class="title">A propos</h3>

                <p>
                    Chez Matcha Tea notre équipe est composée de passionnés de thé matcha,
                    chacun apportant son expertise et son enthousiasme pour créer une expérience unique
                    pour nos clients. Ensemble, nous travaillons en harmonie pour offrir
                    des boissons de qualité, des pâtisseries délicieuses et un service chaleureux.
                    Nous nous engageons à partager notre amour du matcha avec chaque visiteur,
                    en créant un environnement accueillant et convivial où chacun peut se détendre et savourer
                    ses boissons préférées.
                </p>
            </div>
            <img src="../images/shop.png" alt="coffe shop">
        </div>

        <div class="equipe">
            <h3>Voici les membres qui apportent leur expertise et leur passion à notre entreprise :</h3>
            <div class="display-container">
                <img src="../images/barista1.png" alt="barista photo">
                <img src="../images/barista6.jpg" alt="barista photo">
                <img src="../images/barista4.jpg" alt="barista photo">
                <img src="../images/barista5.PNG" alt="barista photo">
            </div>

            <div class="photo-barista">
                <img src="../images/coffee-culture.jpg" alt="barista team">

            </div>
        </div>


    </main>
    <footer>
        <div class="footerContainer">
            <div class="footerNav">
                <ul>
                    <li><a href="../acceuil.html">Acceuil</a></li>

                    <li><a href="ventes.html">Vente</a></li>

                    <li> <a href="l'histoire.html">Histoire </a></li>

                    <li><a href="a_propos.html">À propos</a></li>

                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2025 ; Designed by<span class="designer">Karim Sebih, Jorge Santos, Raïs Mahjoub</span>
            </p>
        </div>
    </footer>
</body>

</html>