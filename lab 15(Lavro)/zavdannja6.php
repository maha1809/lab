<?php
require("config.php");
//include_once("../db.php");
//include_once("function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body>
<?php
$value=mt_rand(1,5);
 echo "<h3 align=\"center\"><a href=zavdannja6.php?passedValue=$value style=\"color:#6495ED;font-weight:\" >zavdannja6.php</a></h3>";
  $valueFromLink=$_GET["passedValue"];
	switch ($valueFromLink) {
		case '1':
			echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:150%;\">Викликати функцію fun1()<div/>";
			break;
		case '2':
			echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:150%;\">Викликати функцію fun2()<div/>";
			break;
		case '3':
			echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:150%;\">Викликати функцію fun3()<div/>";
			break;
		default:
			echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:150%;\">Некоректно введені дані</div>";
			break;
	}
	echo "<h3 align=\"center\"><a href=\"lab13.php\">Назад</a><br></h3>";
?>
</body>
</html>
