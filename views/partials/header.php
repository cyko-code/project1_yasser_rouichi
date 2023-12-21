<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/style.css">
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>

<div class="header">
    <h1><?php echo SITE_NAME; ?></h1>
    <nav>
        <ul>
            <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <li><a href="<?php echo BASE_URL; ?>cart.php">Panier</a></li>
                <li><a href="<?php echo BASE_URL; ?>orders.php">Mes commandes</a></li>
                <li><a href="<?php echo BASE_URL; ?>logout.php">Déconnexion</a></li>
            <?php else : ?>
                <li><a href="<?php echo BASE_URL; ?>login-form.php">Connexion</a></li>
                <li><a href="<?php echo BASE_URL; ?>register-form.php">Inscription</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<div class="content">
