<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon profil - Matcha Tea</title>
        <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon">
        <meta name="description" content="Envoyez nous vos requêtes et posez-nous vos questions ici !">
        <meta name="robots" content="index, follow">
        <script src="https://kit.fontawesome.com/ca3234fc7d.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/matcha3.css">
    </head>
    <body>
        <!--Le header sera commun-->
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
            <section>
                <h2 class="haut-de-page">Mes commandes</h2>
            </section>
            <section id="commandes-contain">
                <table class="commandes-table">
                    <thead class="commandes-head">
                        <tr>
                            <th class="cmd-prod">Produit</th>
                            <th class="cmd-dsc">Description</th>
                            <th class="cmd-prix">Prix</th>
                            <th class="cmd-qte">Qté</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img></td>
                            <td></td>
                            <td></td>
                            <td><i class="fa-solid fa-plus"></i><br>1<br><i class="fa-solid fa-minus"></i></td>
                        </tr>
                        <tr>
                            <td><img></td>
                            <td></td>
                            <td></td>
                            <td><i class="fa-solid fa-plus"></i><br>1<br><i class="fa-solid fa-minus"></i></td>
                        </tr>
                        <tr>
                            <td><img></td>
                            <td></td>
                            <td></td>
                            <td><i class="fa-solid fa-plus"></i><br>1<br><i class="fa-solid fa-minus"></i></td>
                        </tr>
                        <tr>
                            <td><img></td>
                            <td></td>
                            <td></td>
                            <td><i class="fa-solid fa-plus"></i><br>1<br><i class="fa-solid fa-minus"></i></td>
                        </tr>
                        <tfoot>
                            <th class="total" colspan="3">Total&nbsp;:</th>
                            <td>€</td>
                        </tfoot>
                    </tbody>
                </table>
                <section id="valid-achat">
                    <button type="submit" class="bouton">Valider et payer</button>
                    <button type="submit" class="cancel">Vider le panier</button>
                </section>
            </section>
            
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