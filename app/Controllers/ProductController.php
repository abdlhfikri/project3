<?php
namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Products',
            'products' => $this->productModel->getProducts()
        ];
        return view('products', $data);
    }
}
