<title>Информация о записях</title>
<a href="index.php"><h2><p align="left">Вернуться  на главную</p></h2></a>
<?php
include ("db.php");
?>
<html>
<head>
<link rel="stylesheet" href="button.css">
<style>
.myTable { 
width: 100%;
text-align: left;
background-color: MistyRose;
border-collapse: collapse; 
}
.myTable th { 
background-color: BlueViolet;
color: white; 
}
.myTable td, 
.myTable th { 
padding: 10px;
border: 2px solid Indigo; 
}
</style>
</head>
<body>
<table class="myTable">
<tr>
<th>ID записи</th>
<th>ID автомбиля</th>
<th>ID клиента</th>
<th>ID мастера</th>
<th>ID услуги</th>
<th>Дата</th>
<th>Время</th>
<th>Стоимость</th>
<th>Изменить</th>
<th>Удалить</th>
</tr>
<?php
$pro = mysqli_query($db, "SELECT * FROM Jurnal");
$pro = mysqli_fetch_all($pro);
foreach ($pro as $pr) {
?>
<tr>
<td><?=$pr[0] ?></td>
<td><?=$pr[1] ?></td>
<td><?=$pr[2] ?></td>
<td><?=$pr[3] ?></td>
<td><?=$pr[4] ?></td>
<td><?=$pr[5] ?></td>
<td><?=$pr[6] ?></td>
<td><?=$pr[7] ?></td>
<td><a style="color: DarkGreen; text-decoration: none;" href="update5.php?id=<?=$pr[0] ?>">Изменить</a></td>
<td><a style="color: Maroon; text-decoration: none;" href="delete5.php?id=<?=$pr[0] ?>">Удалить</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
<a href="add5.php" class="button">Добавить</a>