<?php
include ("db.php");
$id = $_POST['ID_zapici'];
$aa = $_POST['ID_auto'];
$bb = $_POST['ID_clienta'];
$cc = $_POST['ID_mastera'];
$dd = $_POST['ID_uslugi'];
$ee = $_POST['Date'];
$ff = $_POST['Time'];
$gg = $_POST['Stoimost'];
$result = mysqli_query($db, "UPDATE Jurnal SET ID_auto = '$aa', ID_clienta = '$bb', ID_mastera = '$cc', ID_uslugi = '$dd', Date = '$ee', Time = '$ff', Stoimost = '$gg' WHERE Jurnal . ID_zapici = '$id'");
header('Location: ./Jurnal.php');