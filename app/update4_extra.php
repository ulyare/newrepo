<?php
include ("db.php");
$id = $_POST['ID_uslugi'];
$e = $_POST['Nazvaniye'];
$f = $_POST['Stoimost'];
$result = mysqli_query($db, "UPDATE Usluga SET Nazvaniye = '$e', Stoimost = '$f' WHERE Usluga . ID_uslugi = '$id'");
header('Location: ./Usluga.php');