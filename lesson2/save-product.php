<?php
ob_start();
require_once './Product.php';

$postData = $_POST;
$proModel = new Product();

$response = $proModel->insert($postData);
if(isset($response['id'])){
    header('location: index.php');
    die;
}

echo "Tạo mới không thành công !";


?>