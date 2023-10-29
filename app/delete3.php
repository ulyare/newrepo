<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM Master WHERE Master.ID_mastera = '$id'");
header('Location: ./Master.php');