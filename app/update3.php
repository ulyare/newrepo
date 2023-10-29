<title>Ввод изменений</title>
<a href="Master.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM Master WHERE ID_mastera = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body bgcolor=Wheat>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update3_extra.php" method="POST">
<input type="hidden" name="ID_mastera" value="<?= $pro['ID_mastera'] ?>">
ФИО: <input input type="text" name="FIO" value="<?= $pro['FIO'] ?>"><br><br>
Специализация: <input input type="text" name="Spetsializatsiya" value="<?= $pro['Spetsializatsiya'] ?>"><br><br>
Стаж: <input type="number" min="1" name="Staz" value="<?= $pro['Staz'] ?>"><br><br>
<button type="submit">Применить</button>
</form>
</body>
</html>