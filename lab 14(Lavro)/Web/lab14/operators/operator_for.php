<?php
require("../../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<title>Приклад оператора for</title>
</head>
<body>
<?php echo "<div align=\"center\" style=\"font-size:150%\">
Перевірка, які з чисел діляться націло на число k (ціле)<br>
<form action=\"forOperator_for.php\" method=\"post\">
Введіть число k:<br>
<input type=\"text\" name=\"value_k\" style=\"font-size:120%\"><br>
Введіть числа, для яких хочете здійснити перевірку (цілі):<br>
<input type=\"text\" name=\"value1\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"value2\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"value3\" style=\"font-size:120%\"><br>
<input type=\"submit\" value=\"Перевірити\" <div style=\"font-size:120%\">
</form></div>
<h3 align=\"center\"><a href=\"../lab12.php\">Назад</a><br></h3>
"?>
</body>
</html>
