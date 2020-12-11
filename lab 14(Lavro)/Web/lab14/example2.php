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
<?php echo "<div align=\"center\" style=\"font-size:150%\">
Введіть номер завдання:<br>
1 - обчислення максимальної температури;<br>
2  - обчислення мінімальної температури;<br>
3 - обчислення середньої температури.<br>
<form action=\"forExample2.php\" method=\"post\">
<input type=\"text\" name=\"choiceTask\" style=\"font-size:120%\"><br>
Введіть значення температури:<br>
<input type=\"text\" name=\"temparature1\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"temparature2\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"temparature3\" style=\"font-size:120%\"><br>
<input type=\"submit\" value=\"Результат\" style=\"font-size:120%\">
</form></div>
<h3 align=\"center\"><a href=\"../../menu.html\">Повернутися в меню</a><br></h3>
"?>
</body>
</html>
