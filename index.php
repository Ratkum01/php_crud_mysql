<?php
require 'config/connect.php';
$goods = mysqli_query($connect, "SELECT * FROM `goods`");
// var_dump($goods);
$goods = mysqli_fetch_all($goods);
// echo '<pre>';

// print_r($goods);
// echo '</pre>';
// 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>opisanie</th>
            <th>price</th>
            <th>&#9998</th>
            <th>&#10006</th>
        </tr>
        <?php
        foreach ($goods as $item) {
        
        ?>
        <tr>
            <td><?php echo $item[0] ?></td>
            <td><?php echo $item[1] ?></td>
            <td><?php echo $item[2] ?></td>
            <td><?php echo $item[3] ?></td>
            <td><a href="update.php?id=<?= $item[0]?>">Update</a></td>
            <td><a href="vendor/delete.php?id=<?= $item[0]?>">Delete</a></td>
        </tr>
        <?php
    }?>
    </table>
    <h2> Добавить товар</h2>
    <form action="vendor/create.php" method="post">
        <p>Название</p>
        <input type="text" name="title">
        <p>Описание</p>
        <textarea name="description"></textarea>
        <p>Цена</p>
        <input type="number" name ="price">
        <button type="submit">Добавить</button>
    </form>
</body>

</html>