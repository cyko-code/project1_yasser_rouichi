<?php
require_once 'config/config.php';

// Autres inclusions de fichiers nécessaires selon la page demandée
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'login':
            include 'views/login-form.php';
            break;
        case 'register':
            include 'views/register-form.php';
            break;
        case 'products':
            include 'views/products.php';
            break;
        case 'cart':
            include 'views/cart.php';
            break;
        case 'orders':
            include 'views/orders.php';
            break;
        case 'admin':
            include 'views/admin/manage-users.php';
            break;
        default:
            include 'views/home.php';
            break;
    }
} else {
    include 'views/home.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style.css">
    <!-- Ajoutez d'autres balises meta, liens CSS, ou scripts JS si nécessaire -->
</head>
<body>

<!-- Contenu spécifique à la page actuelle -->
<main>
    <!-- Barre de recherche -->
    <div class="search-bar">
        <input type="text" placeholder="Rechercher des produits...">
        <button type="submit">Rechercher</button>
    </div>

    <!-- Options de connexion et d'inscription -->
    <div class="user-options">
        <a href="<?php echo BASE_URL; ?>index.php?page=login">Connexion</a>
        <a href="<?php echo BASE_URL; ?>index.php?page=register">Inscription</a>
    </div>

    <!-- Contenu spécifique à la page -->
    <?php
    if (isset($_GET['page']) && $_GET['page'] === 'products') {
        // Afficher la liste des produits
        include 'views/products.php';
    }
    ?>
</main>
<!-- Contenu spécifique à la page -->
<main>
    <!-- Barre de recherche -->
    <div class="search-bar">
        <input type="text" placeholder="Rechercher des produits...">
        <button type="submit">Rechercher</button>
    </div>

    <!-- Options de connexion et d'inscription -->
    <div class="user-options">
        <a href="<?php echo BASE_URL; ?>index.php?page=login">Connexion</a>
        <a href="<?php echo BASE_URL; ?>index.php?page=register">Inscription</a>
    </div>

    <!-- Liste des produits -->
    <div class="product-list">
        <?php
        // Exemple de produits (à remplacer par la logique réelle pour récupérer les produits depuis la base de données)
        $products = [
            ['name' => 'rolex 1', 'image' => 'cl.jpg'],
            ['name' => 'rolex 2', 'image' => 'cl1.jpg'],
            ['name' => 'rolex 3', 'image' => 'cl2.jpg'],
        ];

        foreach ($products as $product) {
            echo '<div class="product-item">';
            echo '<h3>' . $product['name'] . '</h3>';
            
            // Lien vers un fichier qui contient la photo du produit
            echo '<a href="product-images/' . $product['image'] . '" target="_blank">Voir la photo du produit</a>';
            
            echo '</div>';
        }
        ?>
    </div>
</main>


</body>
</html>
