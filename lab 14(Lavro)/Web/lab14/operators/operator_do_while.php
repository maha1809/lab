<?php
require("../../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<title>Приклад оператора do...while</title>
</head>
<body>
<?php echo "<div align=\"center\" style=\"font-size:150%\">
Перевірка, яке з чисел ціле, а яке дробове (дробові числа вводити через крапку)<br>
<form action=\"forOperator_do_while.php\" method=\"post\">
Введіть числа:<br>
<input type=\"text\" name=\"value1\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"value2\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"value3\" style=\"font-size:120%\"><br>
<input type=\"submit\" value=\"Перевірити\"  style=\"font-size:120%\">
</form></div>
<h3 align=\"center\"><a href=\"../lab12.php\">Назад</a><br></h3>
"?>
</body>
</html>
