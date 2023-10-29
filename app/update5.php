<title>Ввод изменений</title>
<a href="Jurnal.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM Jurnal WHERE ID_zapici = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body bgcolor=Wheat>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update5_extra.php" method="POST">
<input type="hidden" name="ID_zapici" value="<?= $pro['ID_zapici'] ?>">
ID автомобиля: <input type="number" min="1" name="ID_auto" value="<?= $pro['ID_auto'] ?>"><br><br>
ID клиента: <input type="number" min="1" name="ID_clienta" value="<?= $pro['ID_clienta'] ?>"><br><br>
ID мастера: <input type="number" min="1" name="ID_mastera" value="<?= $pro['ID_mastera'] ?>"><br><br>
ID услуги: <input type="number" min="1" name="ID_uslugi" value="<?= $pro['ID_uslugi'] ?>"><br><br>
Дата: <input input type="date" name="Date" value="<?= $pro['Date'] ?>"><br><br>
Время: <input input type="time" name="Time" value="<?= $pro['Time'] ?>"><br><br>
Стоимость: <input type="number" min="1" name="Stoimost" value="<?= $pro['Stoimost'] ?>"><br><br>
<button type="submit">Применить</button>
</form>
</body>
</html>