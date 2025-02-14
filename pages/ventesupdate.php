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

// Récupérer l'ID à partir de l'URL
$id = $_GET['edit'];

// Gestion de la mise à jour du produit
if (isset($_POST['update_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_ingredient = $_POST['product_ingredient'];
    $product_categorie = $_POST['product_categorie'];
    $product_image = $_FILES['product_image']['name'] ?? null;
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'] ?? null;
    $product_image_folder = $product_image ? '../images/' . $product_image : null;
    

    // Vérifier si tous les champs sont remplis
    if (empty($product_name) || empty($product_price)|| empty($product_image) || empty($product_description) || empty($product_ingredient) || empty($product_categorie)) {
        $message[] = 'Veuillez remplir tous les champs.';
    } else {
        // Préparer la requête de mise à jour avec PDO
        $update_data = "UPDATE menu SET name = :name, prix = :price, description = :description, ingredients = :ingredients,image= :image, categorie_id = :categorie_id WHERE id = :id";
        
        // Préparer la requête PDO
        $stmt = $pdo->prepare($update_data);
        
        // Lier les paramètres à la requête préparée
        $stmt->bindParam(':name', $product_name);
        $stmt->bindParam(':price', $product_price);
        $stmt->bindParam(':description', $product_description);
        $stmt->bindParam(':ingredients', $product_ingredient);
        $stmt->bindParam(':image', $product_image);
        $stmt->bindParam(':categorie_id', $product_categorie, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        // Exécuter la requête
        if ($stmt->execute()) {
            $message[] = 'Produit mis à jour avec succès !';
            // Rediriger ou afficher un message de succès
            header('Location: ventes.php');
            exit; // Terminer l'exécution après la redirection
        } else {
            $message[] = 'Erreur lors de la mise à jour du produit.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pc2.css">
    <title>Mettre à jour un produit</title>
</head>
<body>

<?php
// Affichage des messages d'erreur ou de succès
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>

<div class="container">
    <div class="admin-product-form-container centered">

        <?php
        // Récupérer les données du produit à modifier
        $select = $pdo->prepare("SELECT * FROM menu WHERE id = :id");
        $select->bindParam(':id', $id, PDO::PARAM_INT);
        $select->execute();
        
        // Récupérer le produit correspondant à l'ID
        $row = $select->fetch(PDO::FETCH_ASSOC);

        if ($row) {
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="title">Mettre à jour le produit</h3>
            <label for="product_name">Nom du produit</label>
            <input type="text" id="product_name" name="product_name" class="box" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Entrez le nom du produit" required>

            <label for="product_price">Prix du produit</label>
            <input type="number" id="product_price" name="product_price" class="box" value="<?php echo htmlspecialchars($row['prix']); ?>" placeholder="Entrez le prix du produit" required>

            <label for="product_description">Description du produit</label>
            <input type="text" id="product_description" name="product_description" class="box" value="<?php echo htmlspecialchars($row['description']); ?>" placeholder="Entrez la description du produit" required>

            <label for="product_ingredient">Ingrédients du produit</label>
            <input type="text" id="product_ingredient" name="product_ingredient" class="box" value="<?php echo htmlspecialchars($row['ingredients']); ?>" placeholder="Entrez les ingrédients du produit" required>

            <label for="product_image">Choisir une image</label>
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
            
            <label for="product_categorie">Catégorie du produit</label>
            <select id="product_categorie" name="product_categorie" class="box" required>
                <option value="">-- Sélectionnez une catégorie --</option>
                <?php
                // Récupérer toutes les catégories disponibles
                $categories = $pdo->query("SELECT * FROM categories");
                while ($category = $categories->fetch(PDO::FETCH_ASSOC)) {
                    $selected = ($category['id'] == $row['categorie_id']) ? 'selected' : '';
                    echo '<option value="' . htmlspecialchars($category['id']) . '" ' . $selected . '>' . htmlspecialchars($category['name']) . '</option>';
                }
                ?>
            </select>
            
            <input type="submit" value="Mettre à jour" name="update_product" class="btn">
            <a href="ventes.php" class="btn">Retour</a>
        </form>

        <?php 
        } else {
            echo '<span class="message">Produit non trouvé.</span>';
        }
        ?>

    </div>
</div>

</body>
</html>