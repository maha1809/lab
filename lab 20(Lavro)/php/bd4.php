<html>
<head>
<title>BD</title>
</head>
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
//mysqli_query($dbconn,"ALTER TABLE news add newid INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;");
$file="../file/news.txt";
$fdata_my = fopen($file,"r") or die ("Can't open file $file!");
$mas = fread($fdata_my,filesize($file));
$mas=str_replace("\n", " ", $mas);//замінюємо всі переходи на новий рядок пробілами, "& ", "&", " ~", "~"
$mas=str_replace("& ", "&", $mas);//для того щоб коректо записати дані у таблицю(без зайвих пробілів та 
$mas=str_replace(" ~", "~", $mas);//перехожів на новий рядок)
//echo $mas;
$mas=explode("&",$mas);
for ($i=0;$i<count($mas);$i++){
//echo "mas[$i]=$mas[$i]<p>";
$mas_vidm=explode("~",$mas[$i]);
mysqli_query($dbconn,"insert into news (Тематика, Заголовок,Контент, Дата) values ('$mas_vidm[0]','$mas_vidm[1]', '$mas_vidm[2]','$mas_vidm[3]')");
}
$select=mysqli_query($dbconn,"SELECT Заголовок FROM news ORDER BY Дата DESC ");
if (!$select) { echo "<div align=\"center\"  style=\"color:red;font-weight:bold;font-size:120%\">Error select from dusc</div>";} 
//else {echo "<div align=\"center\"  style=\"color:green;font-weight:bold;font-size:120%\">Good select news</div>";}
echo "<div align=\"center\"><div align=\"center\" style=\"color:#116062;font-weight:bold;font-size:120%\">Три найсвіжіші новини:</div>";
echo "<table>";
$temp=0;
 while ($row=mysqli_fetch_row($select) AND $temp<3){
  echo "<tr><td><a href=\"forBD4.php?passedValueHeader=$row[0]\">$row[0]<a></td></tr>";
  $temp++;
 }
echo "</table>";
////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div align=\"center\" style=\"color:#116062;font-weight:bold;font-size:120%\"><a href=\"forBD4.php?passedValueSubject=Политика\">Політика<a></div>";
$select=mysqli_query($dbconn,"SELECT Заголовок FROM news WHERE Тематика='Политика';");
echo "<table>";
 while ($row=mysqli_fetch_row($select)){
  echo "<tr><td><a href=\"forBD4.php?passedValueHeader=$row[0]\">$row[0]<a></td></tr>";
 }
echo "</table>";
////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div align=\"center\" style=\"color:#116062;font-weight:bold;font-size:120%\"><a href=\"forBD4.php?passedValueSubject=Экономика\">Економіка<a></div>";
$select=mysqli_query($dbconn,"SELECT Заголовок FROM news WHERE Тематика='Экономика'");
echo "<table>";
 while ($row=mysqli_fetch_row($select)){
  echo "<tr><td><a href=\"forBD4.php?passedValueHeader=$row[0]\">$row[0]<a></td></tr>";
 }
echo "</table>";
////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div align=\"center\" style=\"color:#116062;font-weight:bold;font-size:120%\"><a href=\"forBD4.php?passedValueSubject=Происшествия\">Події<a></div>";
$select=mysqli_query($dbconn,"SELECT Заголовок FROM news WHERE Тематика='Происшествия'");
echo "<table>";
 while ($row=mysqli_fetch_row($select)){
  echo "<tr><td><a href=\"forBD4.php?passedValueHeader=$row[0]\">$row[0]<a></td></tr>";
 }
echo "</table>";
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div align=\"center\" style=\"color:#116062;font-weight:bold;font-size:120%\"><a href=\"forBD4.php?passedValueSubject=Технологии\">Технології<a></div>";
$select=mysqli_query($dbconn,"SELECT Заголовок FROM news WHERE Тематика='Технологии'");
echo "<table>";
//Каждый последующий вызов функции будет возвращать массив с данными следующей строки набора или NULL, если строки закончились
 while ($row=mysqli_fetch_row($select)){
  echo "<tr><td><a href=\"forBD4.php?passedValueHeader=$row[0]\">$row[0]<a></td></tr>";
 }
echo "</table>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
$select=mysqli_query($dbconn,"SELECT COUNT(Заголовок) FROM news");
$row=mysqli_fetch_row($select);
 $fpForOut = fopen("../file/out.txt", "w+" ) or die ( "Не вдалося відкрити $fileName" );//якщо файл не існує, він буде створений автоматично
     fwrite($fpForOut, "Кількість новин: ".$row[0]);
     fseek($fpForOut, 0);//переміщення покажчика файлу
     echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%\"><b>Дані, зчитані з файлу out.txt</b></div>";
     echo "<div align=\"center\" style=\"color:#5D8AA8;font-weight:bold;font-size:120%;\">".fread($fpForOut,filesize("../file/out.txt"))."</div>";
     fclose($fpForOut);
     mysqli_close($dbconn); // закриття(відключення) бази даних
echo "</div><h3 align=\"center\"><a href=\"../lab18.php\">Назад</a><br></h3>";
?>
<body style="background-color: #D0F0C0;">

</body>
</html>