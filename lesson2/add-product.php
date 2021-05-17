<?php
require_once './Category.php';
$cateModel = new Category();
$cates = $cateModel->all();

?>
<form action="save-product.php" method="post">
    <div>
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Danh mục sản phẩm</label>
        <select name="cate_id" >
            <?php foreach($cates as $c): ?>
                <option value="<?= $c['id']?>"><?= $c['cate_name']?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="">Ảnh sản phẩm</label>
        <input type="text" name="image">
    </div>
    <div>
        <label for="">mô tả chi tiết</label>
        <textarea name="detail" rows="10"></textarea>
    </div>
    <div>
        <label for="">đánh giá sao</label>
        <input type="radio" value="1" name="star"> 1 sao
        <input type="radio" value="2" name="star"> 2 sao
        <input type="radio" value="3" name="star"> 3 sao
        <input type="radio" value="4" name="star"> 4 sao
        <input type="radio" value="5" name="star"> 5 sao
    </div>
    <div>
        <label for="">lượt view</label>
        <input type="number" name="views">
    </div>
    <div class="">
        <button type="submit">Lưu</button>
    </div>
</form>