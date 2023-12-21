<?php
class ProductModel {
    private $products = [
        ['name' => 'Produit 1', 'price' => 20.99, 'description' => 'Description du produit 1'],
        ['name' => 'Produit 2', 'price' => 30.50, 'description' => 'Description du produit 2'],
        // Ajoutez d'autres produits ici
    ];

    public function getAllProducts() {
        return $this->products;
    }
}
?>
