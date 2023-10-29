<title>Ввод изменений</title>
<a href="Client.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM Client WHERE ID_clienta = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body bgcolor=Wheat>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update2_extra.php" method="POST">
<input type="hidden" name="ID_clienta" value="<?= $pro['ID_clienta'] ?>">
ФИО: <input input type="text" name="FIO" value="<?= $pro['FIO'] ?>"><br><br>
Телефон: <input input type="number" min="10" name="Telefon" value="<?= $pro['Telefon'] ?>"><br><br>
Паспорт: <input type="number" min="10" name="Pasport" value="<?= $pro['Pasport'] ?>"><br><br>
<button type="submit">Применить</button>
</form>
</body>
</html>