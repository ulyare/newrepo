<title>Ввод новых данных</title>
<a href="Usluga.php"><h2><p align="left">Вернуться на предыдущую страницу</p></h2></a>
<?php
include ("db.php");
echo "<h1>Введите данные об услуге</h1>
<form action=\"add4.php\" method=\"POST\">
Название: <input type=\"text\" name=\"Nazvaniye\"/><br><br>
Стоимость: <input type=\"number\" min=\"1\" name=\"Stoimost\"/><br><br>
<input type=\"submit\" value = \"Внести в базу\" name=\"send\"/>
</form>";

if(isset($_POST['send'])) {
$a = $_POST['Nazvaniye'];
$b = $_POST['Stoimost'];
$result = mysqli_query($db, "INSERT INTO Usluga (Nazvaniye, Stoimost) VALUES ('$a','$b')") or die (mysqli_error($db));
echo "<b><i>Информация была добавлена.</i></b>";
}
?>