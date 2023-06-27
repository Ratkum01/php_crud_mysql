<?php
$connect = mysqli_connect('localhost', 'root','','crud');
if (!$connect) {
    die ('Oshibka podklyucheni k BD');
    # code...
}
?>