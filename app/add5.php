<title>Ввод новых данных</title>
<a href="Jurnal.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные об обслуживании</h1>
<form action=\"add5.php\" method=\"POST\">
ID автомобиля: <input type=\"number\" min=\"1\" name=\"ID_auto\"/><br><br>
ID клиента: <input type=\"number\" min=\"1\" name=\"ID_clienta\"/><br><br>
ID мастера: <input type=\"number\" min=\"1\" name=\"ID_mastera\"/><br><br>
ID услуги: <input type=\"number\" min=\"1\" name=\"ID_uslugi\"/><br><br>
Дата: <input type=\"date\" name=\"Date\"/><br><br>
Время: <input type=\"time\" name=\"Time\"/><br><br>
Стоимость: <input type=\"number\" min=\"1\" name=\"Stoimost\"/><br><br>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";
if(isset($_POST['send'])) {
$a = $_POST['ID_auto'];
$b = $_POST['ID_clienta'];
$c = $_POST['ID_mastera'];
$d = $_POST['ID_uslugi'];
$e = $_POST['Date'];
$f = $_POST['Time'];
$g = $_POST['Stoimost'];
$result = mysqli_query($db, "INSERT INTO Jurnal (ID_auto, ID_clienta, ID_mastera, ID_uslugi, Date, Time, Stoimost) VALUES ('$a','$b','$c','$d','$e','$f','$g')") or die (mysqli_error($db));
$query = mysqli_query($db, "SELECT ID_auto FROM Automobil ORDER BY ID_auto DESC LIMIT 1");
$query = mysqli_query($db, "SELECT ID_clienta FROM Client ORDER BY ID_clienta DESC LIMIT 1");
$query = mysqli_query($db, "SELECT ID_mastera FROM Master ORDER BY ID_mastera DESC LIMIT 1");
$query = mysqli_query($db, "SELECT ID_uslugi FROM Usluga ORDER BY ID_uslugi DESC LIMIT 3");
echo "<b><i>Информация была добавлена.</i></b>";
}
?>