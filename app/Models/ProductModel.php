<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'price', 'stock', 'code'];

    public function getProducts() {
        return $this->findAll(); // Devuelve un array de objetos
    }

    public function getProductById($id) {
        return $this->find($id); // Devuelve un solo objeto
    }
}

?>