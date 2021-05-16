<?php
require_once './User.php';
require_once './Product.php';
$userModel = new User();
$listUser = $userModel->all();

$productModel = new Product();
$listProduct = $productModel->all();
echo "<pre>";
var_dump($listProduct);

?>