<?php
require_once 'models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function handleRequest($action) {
        switch ($action) {
            case 'login':
                // Gérer la connexion
                break;
            case 'logout':
                // Gérer la déconnexion
                break;
            case 'register':
                // Gérer l'inscription
                break;
            default:
                include 'views/error.php';
                break;
        }
    }
}
?>
