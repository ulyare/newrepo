<?php
include ("db.php");
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM Client WHERE Client.ID_clienta = '$id'");
header('Location: ./Client.php');