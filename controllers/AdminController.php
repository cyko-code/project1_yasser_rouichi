<?php
require_once 'models/AdminModel.php';

class AdminController {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    public function handleRequest($action) {
        switch ($action) {
            case 'admin':
                // Gérer les fonctionnalités administratives
                break;
            default:
                include 'views/error.php';
                break;
        }
    }
}
?>
