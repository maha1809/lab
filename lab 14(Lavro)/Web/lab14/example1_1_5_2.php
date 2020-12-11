
<?php

require("../config.php");
//include_once("../db.php");z
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<title>Приклад форми get</title>
</head>
<body>
<?php
$variable=$_GET['formvariable'];
echo "<div align=\"center\" style=\"color:#960018;font-size:150%;\"><b>Число додане до поточного файлу методом get:".$variable."</div></b>";
$variableFromEx1_1_5_1=$_GET['formvariableGet'];
echo "<br>";
echo "<div align=\"center\" style=\"color:#960018;font-size:150%;\"><b>Значення змінної передане з файлу example1_1_5_1.php, помножене на 2:".($variableFromEx1_1_5_1*2)."</div></b>";
?>
<div align="center">
<form action="example1_1_5_2.php" method="get">
<input type="text" name="formvariable">
<input type="submit" value="Додати">
</form>
<div>
<h3 align="center"><a href="lab12.php">Назад</a><br></h3>
</body>
</html>
