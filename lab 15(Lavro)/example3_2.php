<?php
require("config.php");
//include_once("../db.php");
include_once("function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>s
<html>
<head>
</head>
<body>
<?php 
echo "<table border=\"2\" cellpadding=\"10\" align=\"center\">";
for($i=0;$i<10;$i++){
	echo "<tr>";
	for($j=0;$j<10;$j++){
    echo "<td>";
	$array[$i][$j]=mt_rand(1,100);
	echo $array[$i][$j];
	echo "</td>";
    }
    echo "</tr>";
    //echo "<br>";
}
echo "</table>";
createTwoArray($array,10);
?>
<h3 align="center"><a href="lab13.php">Назад</a><br></h3>
</body>
</html>
