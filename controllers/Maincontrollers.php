<?php
require_once 'controllers/UserController.php';
require_once 'controllers/AdminController.php';

class MainController {
    public function handleRequest($action) {
        switch ($action) {
            case 'home':
                include 'views/home.php';
                break;
            case 'login':
            case 'logout':
            case 'register':
                $userController = new UserController();
                $userController->handleRequest($action);
                break;
            case 'admin':
                $adminController = new AdminController();
                $adminController->handleRequest($action);
                break;
            default:
                include 'views/error.php';
                break;
        }
    }
}
?>
