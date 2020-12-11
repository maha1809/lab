<?php
require("config.php");
//include_once("../db.php");
include_once("function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body>
<?php echo "<div align=\"center\" style=\"font-size:150%\">
<form action=\"zavdannja5.php\" method=\"post\">
Введіть ціле додатнє число:<br>
<input type=\"text\" name=\"value\" style=\"font-size:120%\"><br>
<input type=\"submit\" value=\"Передати дані\"  style=\"font-size:120%\">
</form></div>";
$value=$_POST['value'];
if($value>0)
{
fibonacciNumber($value);
}
echo "<h3 align=\"center\"><a href=\"lab13.php\">Назад</a><br></h3>";
//fibonacciNumber();
include_once("zavdannja6.php");
?>
</body>
</html>
