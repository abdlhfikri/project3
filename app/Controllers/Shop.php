<?php

namespace App\Controllers;

use App\Models\ModelBarang;

class Shop extends BaseController
{
    protected $ModelBarang;

    public function __construct()
    {
        $this->ModelBarang = new ModelBarang();
        helper('number');
        helper('form');
    }

    public function shop()
    {
        $data = [
            'title' => 'Daftar Barang',
            'barang' => $this->ModelBarang->getBarang()
        ];
        echo view("shop", $data);
    }
    // CRUD Shoping Cart

    // public function cek()
    // {
    //     $cart = \Config\Services::cart();
    //     $response = $cart->contents();
    //     echo '<pre>';
    //     print_r($response);
    //     echo '</pre>';
    // }

    // Insert shoping cart
    public function add()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => $this->request->getPost('price'),
            'name'    => $this->request->getPost('product'),
            'options' => array(
                'gambar' => $this->request->getPost('gambar'), 
                'detail' => $this->request->getPost('detail')
            )
         ));
         session()->setFlashdata('pesan', 'Barang Berhasil Masuk Keranjang !!!');
         return redirect()->to(base_url('shop'));
    }

    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
}
