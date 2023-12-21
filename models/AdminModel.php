<?php
session_start();

class AdminModel {
    private $productsFile = 'data/products.json';
    private $usersFile = 'data/users.json';

    public function addProduct($productName, $price, $description) {
        $products = $this->getProducts();

        // Ajouter le produit à la liste
        $products[] = [
            'name' => $productName,
            'price' => $price,
            'description' => $description,
        ];

        // Sauvegarder la liste mise à jour
        $this->saveProducts($products);

        return true;
    }

    public function upgradeUserToAdmin($username) {
        $users = $this->getUsers();

        // Vérifier si l'utilisateur existe
        if (!isset($users[$username])) {
            return false;
        }

        // Mettre à niveau l'utilisateur en administrateur
        $users[$username]['role'] = 'admin';

        // Sauvegarder la liste mise à jour
        $this->saveUsers($users);

        return true;
    }

    public function getAllOrders() {
        // À implémenter : Récupérer toutes les commandes depuis la base de données
        // Retourner un tableau d'objets représentant les commandes
    }

    public function getAdminStatus($username) {
        $users = $this->getUsers();

        // Vérifier si l'utilisateur a le rôle d'administrateur
        return isset($users[$username]) && $users[$username]['role'] === 'admin';
    }

    private function getProducts() {
        // Charger la liste des produits depuis le fichier JSON
        if (file_exists($this->productsFile)) {
            $productsData = file_get_contents($this->productsFile);
            return json_decode($productsData, true);
        } else {
            return [];
        }
    }

    private function saveProducts($products) {
        // Sauvegarder la liste des produits dans le fichier JSON
        file_put_contents($this->productsFile, json_encode($products, JSON_PRETTY_PRINT));
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
