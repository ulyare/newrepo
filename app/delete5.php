<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM Jurnal WHERE Jurnal.ID_zapici = '$id'");
header('Location: ./Jurnal.php');