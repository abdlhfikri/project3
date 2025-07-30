<?php

namespace App\Controllers;
class Page extends BaseController
{ 
    public function about()
    {
        echo view("about");
    }

    public function contact()
    {
        echo view("contact");
    }

    public function checkout()
    {
        echo view("checkout");
    }

    public function cart()
    {
        echo view("cart");
    }

    public function blog_single()
    {
        echo view("blog_single");
    }

    public function blog()
    {
        echo view("blog");
    }

    public function product_single()
    {
        echo view("product_single");
    }

    public function shop()
    {
        echo view("shop");
    }
}