<html>
<head>
<title>BD</title>
</head>
<body style="background-color: #D0F0C0;">
<?php
require("config.php");
include_once("db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
$valueHeaderFromBD4=$_GET["passedValueHeader"];
$valueSubjectFromBD4=$_GET["passedValueSubject"];
//echo $valueHeaderFromBD4;
//echo $valueSubjectFromBD4;
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%\"><b>Вибірка з news</b></div>";

if(!empty($valueHeaderFromBD4)){
$select=mysqli_query($dbconn,"SELECT Заголовок, Контент, Дата FROM news WHERE Заголовок='$valueHeaderFromBD4'");
if (!$select) { echo "<div align=\"center\"  style=\"color:red;font-weight:bold;font-size:120%\">Error select from dusc</div>";} 
else {echo "<div align=\"center\"  style=\"color:green;font-weight:bold;font-size:120%\">Good select news</div>";}

echo "<table align=\"center\" style=\"font-size:100%; border-color:#5D8AA8; font-weight:bold;\" border=\"5px\" cellspacing=\"10\" cellpadding=\"10\"><tr style=\"color:	#08457E;\"><td  width=10%>Заголовок</td>
<td width=30%>Контент</td><td width=10%>Дата</td></tr>";
while ($row=mysqli_fetch_row($select)){
echo "<tr style=\"color:#4682B4;\"><td>$row[0]</td><td>$row[1]</td><td> $row[2]</td></tr>";
}
echo "</table>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($valueSubjectFromBD4)){
	$select=mysqli_query($dbconn,"SELECT Заголовок, Контент, Дата FROM news WHERE Тематика='$valueSubjectFromBD4'");
if (!$select) { echo "<div align=\"center\"  style=\"color:red;font-weight:bold;font-size:120%\">Error select from dusc</div>";} 
else {echo "<div align=\"center\"  style=\"color:green;font-weight:bold;font-size:120%\">Good select news</div>";}

echo "<table align=\"center\" style=\"font-size:100%; border-color:#5D8AA8; font-weight:bold;\" border=\"5px\" cellspacing=\"10\" cellpadding=\"10\"><tr style=\"color:	#08457E;\"><td  width=10%>Заголовок</td>
<td width=30%>Контент</td><td width=10%>Дата</td></tr>";
while ($row=mysqli_fetch_row($select)){
echo "<tr style=\"color:#4682B4;\"><td>$row[0]</td><td>$row[1]</td><td> $row[2]</td></tr>";
}
echo "</table>";
}
////////////////////////////////////////////////////////////////////////////////////////////////////
echo "</div><h3 align=\"center\"><a href=\"bd4.php\">Назад</a><br></h3>";
?>
</body>
</html>