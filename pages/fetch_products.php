<?php
include("../pages/config.php");

$filter = "";
if (isset($_GET['filter_category']) && $_GET['filter_category'] !== "") {
    $filter = "WHERE menu.categorie_id = :category_id";
}

$query = "SELECT menu.*, categories.name AS categorie_name 
          FROM menu 
          JOIN categories ON menu.categorie_id = categories.id 
          $filter 
          ORDER BY menu.id ASC"; // Trie les produits par ID

$select = $pdo->prepare($query);

if ($filter !== "") {
    $select->bindParam(':category_id', $_GET['filter_category'], PDO::PARAM_INT);
}

$select->execute();
$products = $select->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $row) {
    echo '<tr>
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
