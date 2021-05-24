<?php
 
require_once './Category.php';
$data = $_POST;
// $data['id'] = $_GET['id'];
$cate = Category::where(['id', '=', $_GET['id']])->first();
$cate->update($data);
echo "done";
?>