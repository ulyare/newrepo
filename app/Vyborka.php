<?php
$conn = mysqli_connect('crudapp_db_1', 'root', '1', 'db');
$sql = "SELECT ID_mastera, SUM(Stoimost) AS total_cost FROM Jurnal GROUP BY ID_mastera";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
{
        $ID_mastera = $row["ID_mastera"];
        $total_cost = $row["total_cost"];
        if ($total_cost > 50000) 
{
            
            $bonus = $total_cost * 0.2;
echo "Для рабочего $ID_mastera бонус составит: $bonus\n . </br> " ;
        }
else 
{
        echo "Для рабочего $ID_mastera сумма услуг: $total_cost\n . </br>";
        
       
}}}

else 
{
    echo "Нет данных";
}
?>