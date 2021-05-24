<?php
require_once './Category.php';
$id = $_GET['id'];
$cate = Category::where(['id', '=', $id])->first();

?>

<form action="save-edit.php?id=<?= $cate->id?>" method="post">
    <div class="">
        <label for="">Tên danh mục</label>
        <input type="text" name="cate_name" value="<?= $cate->cate_name?>">
    </div>
    <div class="">
        <label for="">Hiển thị danh mục</label>
        <input type="radio" name="show_menu" <?php if($cate->show_menu == null || $cate->show_menu == 0) echo "checked"; ?>  value="0"> Không hiển thị
        <input type="radio" name="show_menu" <?php if($cate->show_menu == 1 ) echo "checked"; ?> value="1"> Có hiển thị
    </div>
    <button type="submit">Lưu</button>
</form>