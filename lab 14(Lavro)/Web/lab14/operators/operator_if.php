<?php
require("../../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<title>Приклад операторів if, eseif, else</title>
</head>
<body>
<?php echo "<div align=\"center\" style=\"font-size:180%;\">
Перевірка числа(додатнє, від'ємне або нуль)<br>
<form action=\"forOperator_if.php\" method=\"post\">
Введіть число:<br>
<input type=\"text\" name=\"value\" style=\"font-size:120%;\"><br>
<input type=\"submit\" value=\"Перевірити\"  style=\"font-size:120%;\">
</div>
</form>
<h3 align=\"center\"><a href=\"../lab12.php\">Назад</a><br></h3>
"?>
</body>
</html>
