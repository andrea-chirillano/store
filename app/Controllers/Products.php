<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController {
    protected $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function index() {
        $data['products'] = $this->productModel->getProducts();
        return view('products/list', $data);
    }


    public function detail($id) {
        // Cargar el modelo de productos
        $productModel = new ProductModel();

        // Obtener el producto por ID desde la base de datos
        $data['product'] = $productModel->getProductById($id);

        // Verificar si el producto existe
        if ($data['product']) {
            // Cargar la vista de detalles del producto
            return view('products/detail', $data);
        } else {
            return 'Producto no encontrado';
        }
    }

    
}
