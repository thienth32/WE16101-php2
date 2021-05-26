<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController{
    public function index(){
        $products = [
            ['id' => 1, 'name' => 'tivi samsung 49 inch'],
            ['id' => 2, 'name' => 'tivi samsung 55 inch'],
        ];
        include_once './app/views/clients/homepage.php';
    }

    public function detail(){
        echo "HomeController => detail()";
    }
}


?>