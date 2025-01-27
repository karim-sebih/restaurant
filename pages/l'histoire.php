<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire</title>
    <link rel="stylesheet" href="../css/matcha1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/ca3234fc7d.js" crossorigin="anonymous"></script>
    </script>


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
            <!-- <h3 class="title">Notre Histoire</h3> -->
            <h1 class="name">MATCHA TEA</h1>
            <p class="slogan">“Une tasse de thé matcha rend tout meilleur”</p>
        </div>

        <div class="container-description">
            <div class="description">
                <h3 class="title">Notre Histoire</h3>
                <p>
                    Chez Matcha Tea, nous croyons que chaque personne se doit de goûter au plaisir de cette
                    petite merveille en provenance du Japon. Le thé matcha est considéré comme un
                    superaliment. Cette poudre d’un vert électrique, est riche en bons nutriments et
                    particulièrement en antioxydants et vitamines A, C et E. Nous sommes une entreprise
                    passionnée et spécialisée dans la confection de délicieux thés matcha. Que ce soit le goût
                    naturel du matcha en passant par le matcha goût vanille ou encore celui à la fraise, notre
                    entreprise locale travaille à confectionner sur mesure ses petites merveilles.
                </p>
            </div>
            <img src="../images/matcha-field.jpg" alt="matcha-field">
        </div>

        <div class="container-description2">
            <img src="../images/le-the-matcha.webp" alt="le-the-matcha">

            <div class="description">
                <h3 class="title">Notre Engagement</h3>
                <p>
                    Chez Matcha Tea, nous croyons que chaque personne se doit de goûter au plaisir de cette
                    petite merveille en provenance du Japon. Le thé matcha est considéré comme un
                    superaliment. Cette poudre d’un vert électrique, est riche en bons nutriments et
                    particulièrement en antioxydants et vitamines A, C et E. Nous sommes une entreprise
                    passionnée et spécialisée dans la confection de délicieux thés matcha. Que ce soit le goût
                    naturel du matcha en passant par le matcha goût vanille ou encore celui à la fraise, notre
                    entreprise locale travaille à confectionner sur mesure ses petites merveilles.
                </p>

            </div>
        </div>

        <div class="container4">
            <h2 class="main-title">Pourquoi choisir le thé matcha ?</h2>
            <p class="liste-title">
                De façon non exhaustive, voici quelques-unes des propriétés du thé matcha :
            </p>
            <br>
        </div>
        <div class="liste">
            <ul>
                <li>Grâce à la théanine qu’il contient, il apporte une énergie douce et constitue
                    une bonne alternative au café.</li>
                <br>
                <li>Il est antistress et relaxant. Ce n’est d’ailleurs pas pour rien que les moines
                    bouddhistes zen consomment du thé matcha depuis des siècles pour leurs
                    méditations !</li>
                <br>
                <li>Il aide à la régulation de la glycémie et du microbiote intestinal.</li>
                <br>
                <li> Il améliore le système immunitaire grâce notamment aux antioxydants et
                    vitamines qu’il contient.</li>
                br
                <li>Il accroît les performances sportives et aide l’organisme à récupérer après
                    l’effort. Ceci est principalement dû à la haute teneur en antioxydants qui
                    favorisent l’oxygénation des muscles. Il permet également de réguler la
                    production d’acide lactique, responsable des crampes musculaires.</li>
            </ul>
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