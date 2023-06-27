<?php
require 'config/connect.php';
$goods_id=$_GET['id'];
$good =mysqli_query($connect, "SELECT * FROM `goods` WHERE `id`= '$goods_id'");
$good = mysqli_fetch_assoc($good);
// print_r($good)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2> Update товар</h2>
<form action="vendor/update.php" method="post">
    <input type="hidden" name='id' value="<?= $goods_id ?>">
        <p>Название</p>
        <input type="text" name="title" value="<?= $good['title'] ?>">
        <p>Описание</p>
        <textarea name="description"><?= $good['description'] ?></textarea>
        <p>Цена</p>
        <input type="number" name ="price" value="<?= $good['price'] ?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>