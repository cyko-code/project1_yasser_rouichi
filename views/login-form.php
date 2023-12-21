<?php
require_once 'partials/header.php';

// Gérer le formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    require_once 'handlers/login-handler.php';
}
?>

<!-- Formulaire de connexion -->
<div class="form-container">
    <h2>Connexion</h2>
    <form method="post" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Se connecter</button>
    </form>
</div>

<?php require_once 'partials/footer.php'; ?>
