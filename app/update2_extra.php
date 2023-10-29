<?php
include ("db.php");
$id = $_POST['ID_clienta'];
$e = $_POST['FIO'];
$f = $_POST['Telefon'];
$g = $_POST['Pasport'];
$result = mysqli_query($db, "UPDATE Client SET FIO = '$e', Telefon = '$f', Pasport = '$g' WHERE Client . ID_clienta = '$id'");
header('Location: ./Client.php');