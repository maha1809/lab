<?php
require("../../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<title>Приклад оператора switch</title>
</head>
<body>
<?php echo "<div align=\"center\" style=\"font-size:150%;\">
Показати фото тварин:<br>
1)Фото 1<br>
2)Фото 2<br>
3)Фото 3<br>
<form action=\"forOperator_switch.php\" method=\"post\">
Введіть число:<br>
<input type=\"text\" name=\"choice\" style=\"font-size:150%\"><br>
<input type=\"submit\" value=\"Показати\" style=\"font-size:150%\";>
</form></div>
<h3 align=\"center\"><a href=\"../lab12.php\">Назад</a><br></h3>
"?>
</body>
</html>
