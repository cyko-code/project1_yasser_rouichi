<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>EXPRESS</h1>
    </header>
    
    <main>
        <?php
        session_start();

        // Afficher le formulaire de connexion ou le tableau de bord
        if (isset($_SESSION['user_id'])) {
            echo '<h2>Bienvenue sur votre tableau de bord, ' . $_SESSION['user_id'] . '!</h2>';
            // Afficher ici d'autres fonctionnalités du tableau de bord
        } else {
            // Afficher le formulaire de connexion
            include 'login-form.php';

            // Afficher le formulaire d'inscription
            include 'register-form.php';
        }

        // Afficher les produits
        include 'products.php';
        ?>
    </main>

    <footer>
        <p>&copy; 2023 EXPRESS</p>
    </footer>
</body>
</html>
