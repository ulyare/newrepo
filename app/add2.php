<title>Ввод новых данных</title>
<a href="Client.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о клиенте</h1>
<form action=\"add2.php\" method=\"POST\">
ФИО: <input type=\"text\" name=\"FIO\"/><br><br>
Телефон: <input type=\"number\" min=\"10\" name=\"Telefon\"/><br><br>
Паспорт: <input type=\"number\" min=\"10\" name=\"Pasport\"/><br><br>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$e = $_POST['FIO'];
$f = $_POST['Telefon'];
$g = $_POST['Pasport'];
$result = mysqli_query($db, "INSERT INTO Client (FIO, Telefon, Pasport) VALUES ('$e','$f','$g')") or die (mysqli_error($db));
echo "<b><i>Информация была добавлена.</i></b>";
}
?>