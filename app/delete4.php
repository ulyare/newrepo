<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM Usluga WHERE Usluga.ID_uslugi = '$id'");
header('Location: ./Usluga.php');