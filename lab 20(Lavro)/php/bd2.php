<html>
<head>
<title>BD</title>
</head>
<body style="background-color: #D0F0C0;">
<?php
require("config.php");
include_once("db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
mysqli_query($dbconn,"insert into dusc (name_d, key_concepts1,key_concepts2, key_concepts3) values ('Обробка фото','Photoshop', 'CorelDraw','Paint')");
echo "<div  align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%\"><b>Вибірка з dusc</b></div>";
$k=1;
$select=mysqli_query($dbconn,"SELECT id,name_d, key_concepts1 ,key_concepts2, key_concepts3 FROM dusc");
if (!$select) { echo "<div align=\"center\"  style=\"color:red;font-weight:bold;font-size:120%\">Error select from dusc</div>";} 
else {echo "<div align=\"center\"  style=\"color:green;font-weight:bold;font-size:120%\">Good select dusc</div>";}

echo "<table align=\"center\" style=\"font-size:120%; border-color:#5D8AA8; font-weight:bold;\" border=\"5px\" cellspacing=\"10\" cellpadding=\"10\"><tr style=\"color:	#08457E;\"><td width=10%>ID</td><td  width=30%>Назва лекції</td>
<td width=10%>Ключове поняття 1</td><td width=10%>Ключове поняття 2</td>
<td width=10%>Ключове поняття 3</td></tr>";
//Каждый последующий вызов функции будет возвращать массив с данными следующей строки набора или NULL, если строки закончились
while ($row=mysqli_fetch_row($select)){$id[$k]=$row[0];
echo "<tr style=\"color:#4682B4;\"><td>$id[$k]</td><td>$row[1]</td><td>$row[2]</td><td> $row[3]</td><td> $row[4]</td></tr>";
 $k=$k+1;
}
echo "</table>";
mysqli_close($dbconn); // закриття(відключення) бази даних
echo "<h3 align=\"center\"><a href=\"../lab18.php\">Назад</a><br></h3>";
?>
</body>
</html>