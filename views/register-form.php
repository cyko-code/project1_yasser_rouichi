<?php
require_once 'controllers/UserController.php';

// Gérer le formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    // Validation des données
    $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';

    // Vérification des champs obligatoires
    if (empty($username) || empty($password) || empty($email)) {
        echo 'Tous les champs sont obligatoires.';
    } else {
        $userController = new UserController();
        $success = $userController->handleRequest('register', $username, $password, $email);

        if ($success) {
            echo 'Inscription réussie. Vous pouvez maintenant vous connecter.';
        } else {
            echo 'Erreur lors de l\'inscription. Veuillez réessayer.';
        }
    }
}
?>

<!-- Formulaire d'inscription -->
<h2>Inscription</h2>
<form method="post" action="">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>

    <label for="email">Adresse email :</label>
    <input type="email" name="email" required>

    <button type="submit" name="register">S'inscrire</button>
</form>
