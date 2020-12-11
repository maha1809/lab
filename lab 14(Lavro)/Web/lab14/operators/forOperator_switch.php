<?php
require("../../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body>
<?php 
$number=$_POST['choice'];

    switch ($number) {
	case '1':
	echo "<img src=\"animal1.jpg\">";
		break;
	case '2':
	echo "<img src=\"animal2.jpg\">";
		break;
	case '3':
	echo "<img src=\"animal3.jpg\">";
		break;
	default:
		echo "Некоректно введені дані, повторіть спробу";
		break;
}
?>
<h3 align="center"><a href="operator_switch.php">Назад</a><br></h3>
</body>
</html>
