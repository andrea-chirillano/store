<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getProducts(); // Asegúrate de que esta función exista en tu modelo

        return view('products/list', $data);
    }
}
