<?php
class UserModel {
    private $usersFile = 'data/users.json';

    public function registerUser($username, $password, $email) {
        $users = $this->getUsers();

        // Vérifier si le nom d'utilisateur est déjà utilisé
        if (isset($users[$username])) {
            return false;
        }

        // Hasher le mot de passe (en production, utilisez password_hash)
        $hashedPassword = md5($password);

        // Ajouter l'utilisateur à la liste
        $users[$username] = [
            'password' => $hashedPassword,
            'email' => $email,
        ];

        // Sauvegarder la liste mise à jour
        $this->saveUsers($users);

        return true;
    }

    public function loginUser($username, $password) {
        $users = $this->getUsers();

        // Vérifier si l'utilisateur existe
        if (!isset($users[$username])) {
            return false;
        }

        // Vérifier le mot de passe (en production, utilisez password_verify)
        $hashedPassword = md5($password);
        if ($users[$username]['password'] === $hashedPassword) {
            // Définir l'utilisateur comme connecté (en production, utilisez des sessions sécurisées)
            $_SESSION['user_id'] = $username;
            return true;
        }

        return false;
    }

    public function logoutUser() {
        // Déconnexion de l'utilisateur (en production, détruisez la session)
        unset($_SESSION['user_id']);
    }

    private function getUsers() {
        // Charger la liste des utilisateurs depuis le fichier JSON
        if (file_exists($this->usersFile)) {
            $usersData = file_get_contents($this->usersFile);
            return json_decode($usersData, true);
        } else {
            return [];
        }
    }

    private function saveUsers($users) {
        // Sauvegarder la liste des utilisateurs dans le fichier JSON
        file_put_contents($this->usersFile, json_encode($users, JSON_PRETTY_PRINT));
    }
}
?>
