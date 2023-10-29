<title>Ввод изменений</title>
<a href="Usluga.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM Usluga WHERE ID_uslugi = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body bgcolor=Wheat>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update4_extra.php" method="POST">
<input type="hidden" name="ID_uslugi" value="<?= $pro['ID_uslugi'] ?>">
Название: <input input type="text" name="Nazvaniye" value="<?= $pro['Nazvaniye'] ?>"><br><br>
Стоимость: <input type="number" min="1" name="Stoimost" value="<?= $pro['Stoimost'] ?>"><br><br>
<button type="submit">Применить</button>
</form>
</body>
</html>