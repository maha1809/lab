<html>
<head>
<title>BD</title>
</head>
<body style="background-color: #D0F0C0;">
<?php
require("config.php");
include_once("db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
mysqli_query($dbconn,"drop table news");
if(!mysqli_query($dbconn,
	"CREATE TABLE news(
	Тематика text,
	Заголовок text,
	Контент text,
	Дата text
      )")){
	echo "Error create table!!!<br>";
}
$file="../file/news.txt";
$fdata_my = fopen($file,"r") or die ("Can't open file $file!");
$mas = fread($fdata_my,filesize($file));
$mas=explode("&",$mas);
for ($i=0;$i<count($mas);$i++){
$mas_vidm=explode("~",$mas[$i]);
 mysqli_query($dbconn,"insert into news (Тематика, Заголовок,Контент, Дата) values ('$mas_vidm[0]','$mas_vidm[1]', '$mas_vidm[2]','$mas_vidm[3]')");
}
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%\"><b>Вибірка з news</b></div>";
$select=mysqli_query($dbconn,"SELECT Тематика,Заголовок, Контент ,Дата FROM news");
if (!$select) { echo "<div align=\"center\"  style=\"color:red;font-weight:bold;font-size:120%\">Error select from dusc</div>";} 
//else {echo "<div align=\"center\"  style=\"color:green;font-weight:bold;font-size:120%\">Good select news</div>";}

echo "<table align=\"center\" style=\"font-size:100%; border-color:#5D8AA8; font-weight:bold;\" border=\"5px\" cellspacing=\"10\" cellpadding=\"10\"><tr style=\"color:	#08457E;\"><td width=10%>Тематика</td><td  width=10%>Заголовок</td>
<td width=30%>Контент</td><td width=10%>Дата</td></tr>";
//Каждый последующий вызов функции будет возвращать массив с данными следующей строки набора или NULL, если строки закончились
while ($row=mysqli_fetch_row($select)){
echo "<tr style=\"color:#4682B4;\"><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td> $row[3]</td></tr>";
}
echo "</table>";
mysqli_close($dbconn); // закриття(відключення) бази даних
echo "<h3 align=\"center\"><a href=\"../lab18.php\">Назад</a><br></h3>";
?>
</body>
</html>