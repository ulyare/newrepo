<?php
include ("db.php");
$id = $_POST['ID_mastera'];
$e = $_POST['FIO'];
$f = $_POST['Spetsializatsiya'];
$g = $_POST['Staz'];
$result = mysqli_query($db, "UPDATE Master SET FIO = '$e', Spetsializatsiya = '$f', Staz = '$g' WHERE Master . ID_mastera = '$id'");
header('Location: ./Master.php');