<title>Ввод изменений</title>
<a href="Automobil.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
$pro_id = $_GET['id'];
$pro = mysqli_query($db, "SELECT * FROM Automobil WHERE ID_auto = '$pro_id'");
$pro = mysqli_fetch_assoc($pro);
?>
<html>
<body bgcolor=Wheat>
<p align="right"><h1>Внесите изменения</h1></p>
<form action="update1_extra.php" method="POST">
<input type="hidden" name="ID_auto" value="<?= $pro['ID_auto'] ?>">
Номер автомобиля: <input input type="text" name="Nomer" value="<?= $pro['Nomer'] ?>"><br><br>
Марка автомобиля: <input input type="text" name="Marka" value="<?= $pro['Marka'] ?>"><br><br>
Название автомобиля: <input type="text" name="Nazzvaniye" value="<?= $pro['Nazzvaniye'] ?>"><br><br>
ID владельца: <input input type="number" min="1" name="ID_vladeltsa" value="<?= $pro['ID_vladeltsa'] ?>"><br><br>
<button type="submit">Применить</button>
</form>
</body>
</html>