<?php
require_once './Product.php';

$productModel = new Product();

if(isset($_GET['keyword']) && $_GET['keyword'] != ""){
    $listProduct = $productModel->search('name', 'like', "%" . $_GET['keyword'] . "%");
}else{
    $listProduct = $productModel->all();
}



?>
<form action="" method="get">
    <input type="text" name="keyword">
    <button type="submit">Search</button>
</form>
<table>
    <thead>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Tên danh mục</th>
        <th>Giá sản phẩm</th>
    </thead>
    <tbody>
    <?php foreach($listProduct as $pro):?>
        <tr>
            <td><?= $pro['id'] ?></td>
            <td><?= $pro['name'] ?></td>
            <td><?= $pro['cate_name'] ?></td>
            <td><?= $pro['price'] ?></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>