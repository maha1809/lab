<?php
require("../../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<title>Приклад оператора while</title>
</head>
<body>
<?php echo "<div align=\"center\" style=\"font-size:150%;\">
Таблиця множення<br>
<form action=\"forOperator_while.php\" method=\"post\">
Введіть число:<br>
<input type=\"text\" name=\"value\" style=\"font-size:120%\"><br>
<input type=\"submit\" value=\"Показати\" style=\"font-size:120%\">
</form></div>
<h3 align=\"center\"><a href=\"../lab12.php\">Назад</a><br></h3>
"?>
</body>
</html>
