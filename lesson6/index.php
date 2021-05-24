<?php
require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductController.php';
require_once './app/controllers/UserController.php';
require_once './app/models/Product.php';
use App\Models\Product;
use App\Controllers\HomeController;
$ctr = new HomeController();
echo $ctr->index();


?>