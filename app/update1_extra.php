<?php
include ("db.php");
$id = $_POST['ID_auto'];
$a = $_POST['Nomer'];
$b = $_POST['Marka'];
$c = $_POST['Nazzvaniye'];
$d = $_POST['ID_vladeltsa'];
$result = mysqli_query($db, "UPDATE Automobil SET Nomer = '$a', Marka = '$b', Nazzvaniye = '$c', ID_vladeltsa = '$d' WHERE Automobil . ID_auto = '$id'");
header('Location: ./Automobil.php');