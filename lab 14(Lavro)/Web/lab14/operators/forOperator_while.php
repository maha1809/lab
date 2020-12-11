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
$number=$_POST['value'];
$i=0;
while ( $i <= 10) {
  	echo "<div align=\"center\" style=\"font-size:150%;color:#FF9900;font-weight:bold;\">".$number."*".$i."=".$number*$i."</div>";
  	echo "<br>";
  	$i++;
}  
?>
<h3 align="center"><a href="operator_while.php">Назад</a><br></h3>
</body>
</html>
