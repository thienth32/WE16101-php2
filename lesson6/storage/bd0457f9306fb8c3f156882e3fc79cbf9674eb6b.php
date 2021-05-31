<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Sản phẩm: <?php echo e($product->name); ?></h3>
    <p>Danh mục <?php echo e($product->category->cate_name); ?></p>
    <?php $__currentLoopData = $product->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e($img->img_url); ?>" width="50px">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH /Library/WebServer/Documents/WE16101-php2/lesson6/app/views/clients/homepage.blade.php ENDPATH**/ ?>