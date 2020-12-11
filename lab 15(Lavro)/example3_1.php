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
<?php 
for($i=0;$i<5;$i++){
	$array[$i]=mt_rand(1,20);
}
showArray($array);
showArrayReverse($array);
?>
<h3 align="center"><a href="lab13.php">Назад</a><br></h3>
</body>
</html>
