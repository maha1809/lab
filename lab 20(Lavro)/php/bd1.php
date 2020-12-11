<html>
<head>
<title>BD</title>
</head>
<body style="background-color: #D0F0C0;">
<?php
require("config.php");
include_once("db.php");
header("Content-Type: text/html; charset=".$config{'charset'});

mysqli_query($dbconn,"drop table dusc");//Оператор DROP TABLE удаляет одну или несколько таблиц
mysqli_query($dbconn,"drop sequence dusc_seq");
mysqli_query($dbconn,"create sequence dusc_seq minvalue 0 maxvalue 999 start 0");
//mysqli_query — Выполняет запрос к базе данных
//У MySQL послідовність - це список цілих чисел, згенерованих у порядку зростання, тобто 1,2,3 ... Для багатьох додатків потрібні послідовності для генерування унікальних чисел в основному для ідентифікації, наприклад, ідентифікатор клієнта в CRM, номери співробітників в HR та номери обладнання в система управління послугами.
mysqli_query($dbconn,"SELECT setval('dusc_seq',0)");
$k=0;
if(!mysqli_query($dbconn,
	"CREATE TABLE dusc(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	name_d VARCHAR(250) UNIQUE,
	key_concepts1 text,
	key_concepts2 text,
	key_concepts3 text
       )")){  //key_concepts text[]
	//Атрибут AUTO_INCREMENT может использоваться для генерации уникального идентификатора для новых строк
	//У MySQL первинний ключ - це одне поле або комбінація полів, що однозначно визначає запис. Жодне з полів, що входять до складу первинного ключа, не може містити значення NULL. У таблиці може бути лише один первинний ключ.
 	echo "Error create table!!!<br>";
 }

mysqli_query($dbconn,"insert into dusc (name_d, key_concepts1,key_concepts2, key_concepts3) values ('Основи інтернет','HTML', 'JavaScript','WWWW')");
mysqli_query($dbconn,"insert into dusc (name_d, key_concepts1, key_concepts2) values ('ШІ','Пролог', 'Моделювання')");
$key1='Штучний інтелект';
$name='ШІ';
$res1=mysqli_query($dbconn,"UPDATE dusc set key_concepts3='$key1' where name_d='ШІ'");
//Оператор UPDATE використовується для оновлення існуючих записів у таблиці:
//set встановлює значення для поля
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%\"><b>Вибірка з dusc</b></div>";
$k=1;
$select=mysqli_query($dbconn,"SELECT id,name_d, key_concepts1 ,key_concepts2, key_concepts3 FROM dusc");
if (!$select) { echo "<div align=\"center\"  style=\"color:red;font-weight:bold;font-size:120%\">Error select from dusc</div>";} 
else {echo "<div align=\"center\"  style=\"color:green;font-weight:bold;font-size:120%\">Good select dusc</div>";}

echo "<table align=\"center\" style=\"font-size:120%; border-color:#5D8AA8; font-weight:bold;\" border=\"5px\" cellspacing=\"10\" cellpadding=\"10\"><tr style=\"color:	#08457E;\"><td width=10%>ID</td><td  width=30%>Назва лекції</td>
<td width=10%>Ключове поняття 1</td><td width=10%>Ключове поняття 2</td>
<td width=10%>Ключове поняття 3</td></tr>";

while ($row=mysqli_fetch_row($select)){//mysqli_fetch_row -  Получение строки результирующей таблицы в виде массива
//Каждый последующий вызов функции будет возвращать массив с данными следующей строки набора или NULL, если строки закончились
	$id[$k]=$row[0];
echo "<tr style=\"color:#4682B4;\"><td>$id[$k]</td><td>$row[1]</td><td>$row[2]</td><td> $row[3]</td><td> $row[4]</td></tr>";
 $k=$k+1;
}
echo "</table>";
mysqli_close($dbconn); // закриття(відключення) бази даних
echo "<h3 align=\"center\"><a href=\"../lab18.php\">Назад</a><br></h3>";
?>
</body>
</html>