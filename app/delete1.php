<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM Automobil WHERE Automobil.ID_auto = '$id'");
header('Location: ./Automobil.php');