<?php
namespace App\Controllers;
use App\Models\Product;

class HomeController extends BaseController{
    public function index(){
        $product = Product::find(345);
        $product->load('category', 'galleries');
        
        $this->render('clients.homepage', [
            'product' => $product
        ]);
    }

    public function detail(){
        echo "HomeController => detail()";
    }
}


?>