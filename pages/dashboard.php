<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: connexion.php');
    exit;
}

?>
<?php


include("../utils/config2.php");

// Activer l'affichage des erreurs PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Gestion de la suppression du produit
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    if (is_numeric($id)) {
        $delete = $pdo->prepare("DELETE FROM menu WHERE id = :id");
        $delete->bindParam(':id', $id, PDO::PARAM_INT);

        if ($delete->execute()) {
            header('Location: ventes.php');
            exit;
        } else {
            echo "Erreur lors de la suppression.";
        }
    } else {
        echo "ID invalide.";
    }
}

// Gestion de l'ajout d'un produit
if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_ingredient = $_POST['product_ingredient'];
    $product_categorie = $_POST['product_categorie'];
    $product_image = $_FILES['product_image']['name'] ?? null;
$product_image_tmp_name = $_FILES['product_image']['tmp_name'] ?? null;
$product_image_folder = $product_image ? '../images/' . $product_image : null;

    

    if (empty($product_name) || empty($product_price)|| empty($product_image) || empty($product_description) || empty($product_ingredient) || empty($product_categorie)) {
        echo 'Veuillez remplir tous les champs.';
    } else {
        $insert = "INSERT INTO menu (name, prix, description, ingredients, categorie_id,image) 
                   VALUES (:name, :prix, :description, :ingredients, :categorie_id, :image)";
        $stmt = $pdo->prepare($insert);
        $result = $stmt->execute([
            ':image' => $product_image,
            ':name' => $product_name,
            ':prix' => $product_price,
            ':description' => $product_description,
            ':ingredients' => $product_ingredient,
            ':categorie_id' => $product_categorie
        ]);if ($result) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            echo 'Nouveau produit ajouté avec succès.';
        } else {
            echo 'Erreur lors de l’ajout du produit.';
        }
    }
      
  

  }; 
 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des produits</title>
    <link rel="stylesheet" href="../css/pc2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca3234fc7d.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
        <div class="navbar">
            <div class="logo">
                <a href="../index.php">
                    <img src="../images/pizza country logo.png" height= '100'alt="logo matcha tea" >
                </a>
            </div>
            <ul class="links">
                <li><a href="ventes.php">Vente</a></li>
               
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="box">
                <a href="#">
                    <input type="search" placeholder="search...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            <div class="buttons">
                <a href="profil.php" class="action-button-user">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="commandes.php" class="action-button-shop">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="deconnexion.php">deconnexion</a>
            </div>
            <div class="burger-menu-button">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="burger-menu open">
            <ul class="links">
                <li><a href="ventes.php">Vente</a></li>
                
                <li><a href="contact.php">Contact</a></li>
                
                <div class="divider"></div>
                <div class="buttons-burger-menu">
                    <a href="profil.php" class="action-button-user">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="commandes.php" class="action-button-shop">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <a href="deconnexion.php">deconnexion</a>
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
<br>
<br>
<section>
        <div class="container">
            <h2 class="msg-bienvenue">Bienvenue sur votre tableau de bord</h2>
            <p class="access">Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à nos utilisateurs inscrits.</p>
            <a href="index.php">Se déconnecter</a>
        </div>
    </section>
    <div class="container">
        <a href="#" class="btnadd">Ajouter un produit</a>
    </div>

    <div class="popup">
        <div class="popup-content">
            <img src="../images/icons8.png" alt="Close" class="close" role="button" aria-label="Close Popup">
            <div class="admin-product-form-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <h3>Ajouter un nouveau produit</h3>
                    <label for="product_name">Nom du produit</label>
                    <input type="text" id="product_name" placeholder="Entrez le nom du produit" name="product_name" class="box" required>
                    <label for="product_price">Prix du produit</label>
                    <input type="number" id="product_price" placeholder="Entrez le prix du produit" name="product_price" class="box" required>
                    <label for="product_description">Description du produit</label>
                    <input type="text" id="product_description" placeholder="Entrez la description du produit" name="product_description" class="box" required>
                    <label for="product_ingredient">Ingrédients du produit</label>
                    <input type="text" id="product_ingredient" placeholder="Entrez les ingrédients du produit" name="product_ingredient" class="box" required>
                    <label for="product_image">Choisir une image</label>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                    <label for="product_categorie">Catégorie du produit</label>
                    <select id="categorie" name="product_categorie" class="box" required>
                        <option value="">-- Sélectionnez une catégorie --</option>
                        <?php
                        $categories = $pdo->query("SELECT * FROM categories");
                        while ($row = $categories->fetch(PDO::FETCH_ASSOC)) {
                            echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['name']) . '</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                    <input type="submit" class="btn" name="add_product" value="Ajouter le produit">
                </form>
                <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Hide popup initially
            document.querySelector(".popup").style.display = "none";

            // Show popup when "Add Product" button is clicked
            document.querySelector(".btnadd").addEventListener("click", function (e) {
                e.preventDefault(); // Prevent link default action
                document.querySelector(".popup").style.display = "flex";
            });

            // Hide popup when close button is clicked
            document.querySelector(".close").addEventListener("click", function () {
                document.querySelector(".popup").style.display = "none";
            });
        });
    </script>

    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Description</th>
                    <th>Ingrédients</th>
                    <th>Catégorie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = $pdo->prepare("SELECT menu.*, categories.name AS categorie_name FROM menu JOIN categories ON menu.categorie_id = categories.id");
                $select->execute();
                $products = $select->fetchAll(PDO::FETCH_ASSOC);

                foreach ($products as $row) {
    echo '<tr>
            <td><img src="../images/' . htmlspecialchars($row['image']) . '" height="100"></td>
            <td>' . htmlspecialchars($row['name']) . '</td>
            <td>' . htmlspecialchars($row['prix']) . ' €</td>
            <td>' . htmlspecialchars($row['description']) . '</td>
            <td>' . htmlspecialchars($row['ingredients']) . '</td>
            <td>' . htmlspecialchars($row['categorie_name']) . '</td>
                            <td>
                                <a href="ventesupdate.php?edit=' . $row['id'] . '" class="btn"> 
                                    <i class="fas fa-edit"></i> Modifier 
                                </a>
                                <a href="ventes.php?delete=' . $row['id'] . '" class="btn" onclick="return confirm(\'Voulez-vous vraiment supprimer ce produit ?\');"> 
                                    <i class="fas fa-trash"></i> Supprimer 
                                </a>
                            </td>
                          </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>
<main>
<form class="filtrer" action="" method="GET">
    <label for="filter_category">Filtrer par catégorie :</label>
    <select name="filter_category" id="filter_category" onchange="this.form.submit()">
        <option value="">Toutes les catégories</option>
        <?php
        $categories = $pdo->query("SELECT * FROM categories");
        while ($row = $categories->fetch(PDO::FETCH_ASSOC)) {
            $selected = isset($_GET['filter_category']) && $_GET['filter_category'] == $row['id'] ? 'selected' : '';
            echo '<option value="' . htmlspecialchars($row['id']) . '" ' . $selected . '>' . htmlspecialchars($row['name']) . '</option>';
        }
        ?>
    </select>
</form>


<?php
// Récupérer les catégories avec leurs plats
$categories = $pdo->query("
    SELECT c.id, c.name AS categorie_name, m.id AS menu_id, m.name, m.prix, m.description, m.ingredients ,m.image
    FROM categories c
    LEFT JOIN menu m ON c.id = m.categorie_id
    ORDER BY id ASC
")->fetchAll(PDO::FETCH_ASSOC);

// Organisation des données par catégorie
$menu_by_category = [];
foreach ($categories as $row) {
    if (!isset($menu_by_category[$row['categorie_name']])) {
        $menu_by_category[$row['categorie_name']] = [];
    }
    if ($row['menu_id']) { // Vérifier si la catégorie contient des produits
        $menu_by_category[$row['categorie_name']][] = $row;
    }
}
?>

<div class="menu-container">
    <?php
    // Affichage des catégories et de leurs plats
    foreach ($menu_by_category as $categorie_name => $menus) {
        echo "<div class='category'>";
        echo "<h2>$categorie_name</h2>";
        echo "<ul class='menu-list'>";

        foreach ($menus as $menu) {
            echo "<div class='display'>";
            echo "<li class='menu-item'>";

            if (!empty($menu['image'])) {
                $image_path = '../images/' . htmlspecialchars($menu['image']);
                
                 // Pour déboguer et vérifier le chemin
                echo "<img src='$image_path' alt='" . htmlspecialchars($menu['name']) . "' class='menu-image' height='50'>";
            } else {
                echo "<img src='../images/default.jpg' alt='Image non disponible' class='menu-image' height='50'>";
            }
            

            // Affichage du nom, prix, description et ingrédients
            echo "<strong>{$menu['name']}</strong> - {$menu['prix']} €";
            echo "<em>{$menu['description']}</em><br>";
            echo "<span class='ingredients'>Ingrédients : {$menu['ingredients']}</span>";
            echo "</li>";
            echo "</div>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
</div>




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
</body>

</html>