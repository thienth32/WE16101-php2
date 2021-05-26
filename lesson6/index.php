<?php
require_once './vendor/autoload.php';

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $ctr = new \App\Controllers\HomeController();
        $ctr->index();
        break;
    case 'chi-tiet':
        $ctr = new \App\Controllers\ProductController();
        $ctr->detail();
        break;
    default:
        echo "Duong dan khong ton tai";
        die;
        break;
}


?>