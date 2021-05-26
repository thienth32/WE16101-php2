<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tổng số sản phẩm: <?= count($products ) ?>
    <ul>
        <?php foreach($products as $pro):?>
            <li><?= $pro['id']?> - <?= $pro['name']?></li>
        <?php endforeach?>
    </u>    
</body>
</html>