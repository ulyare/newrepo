<title>Ввод новых данных</title>
<a href="Automobil.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные об автомобиле</h1>
<form action=\"add1.php\" method=\"POST\">
Номер автомобиля: <input type=\"text\" name=\"Nomer\"/><br><br>
Марка автомобиля: <input type=\"text\" name=\"Marka\"/><br><br>
Название автомобиля: <input type=\"text\" name=\"Nazzvaniye\"/><br><br>
ID владельца: <input type=\"number\" min=\"1\" name=\"ID_vladeltsa\"/><br><br>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$a = $_POST['Nomer'];
$b = $_POST['Marka'];
$c = $_POST['Nazzvaniye'];
$d = $_POST['ID_vladeltsa'];
$result = mysqli_query($db, "INSERT INTO Automobil (Nomer, Marka, Nazzvaniye, ID_vladeltsa) VALUES ('$a','$b','$c','$d')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT ID_vladeltsa FROM Client ORDER BY ID_clienta DESC LIMIT 1");
echo "<b><i>Информация была добавлена.</i></b>";
}
?>