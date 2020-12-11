<?php
require("../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<title>Приклад форми Post</title>
</head>
<body>
<?php 
$variable=$_POST['formvariable'];
echo "<br>";
echo "<div align=\"center\" style=\"color:#960018;font-size:150%;\"><b>Число додане до поточного файлу методом post:".$variable."</b></div>";
echo "<div align=\"center\" style=\"font-size:180%;\">
<form action=\"example1_1_5_1.php\" method=\"post\">
<input type=\"text\" name=\"formvariable\">
<input type=\"submit\" value=\"Додати число до поточного файлу\"><br></form>
<form action=\"example1_1_5_2.php\" method=\"get\">
<input type=\"text\" name=\"formvariableGet\">
<input type=\"submit\" value=\"Додати число до файлу example1_1_5_2.php\"></form></div>"?>
<h3 align="center"><a href="lab12.php">Назад</a><br></h3>
</body>
</html>
