<title>Ввод новых данных</title>
<a href="Master.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные о мастере</h1>
<form action=\"add3.php\" method=\"POST\">
ФИО: <input type=\"text\" name=\"FIO\"/><br><br>
Специализация: <input type=\"text\" name=\"Spetsializatsiya\"/><br><br>
Стаж: <input type=\"number\" min=\"1\" name=\"Staz\"/><br><br>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$a = $_POST['FIO'];
$b = $_POST['Spetsializatsiya'];
$c = $_POST['Staz'];
$result = mysqli_query($db, "INSERT INTO Master (FIO, Spetsializatsiya, Staz) VALUES ('$a','$b','$c')") or die (mysqli_error($db));
echo "<b><i>Информация была добавлена.</i></b>";
}
?>