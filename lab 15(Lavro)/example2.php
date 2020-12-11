<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body>
<?php 
for($i=0;$i<10;$i++){
	//$array[i]=mt_rand()%20+1;
	$array[$i]=mt_rand(1,20);
	echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:120%;\">A[".$i."]"."=".$array[$i]."</div><br>";
}
$min=$array[0];
$max=$array[0];
for($i=0;$i<10;$i++){
    if($array[$i]>$max){
      $max=$array[$i];
      $indexMax=$i;
    }
    if($array[$i]<$min){
      $min=$array[$i];
      $indexMin=$i;
    }
}
echo "<div align=\"center\" style=\"color:#423189;font-weight: bold;font-size:120%;\">Мінімум:"."індекс - ".$indexMin.", значення - ".$min."</div><br>";
echo "<div align=\"center\" style=\"color:#423189;font-weight: bold;font-size:120%;\">Максимум:"."індекс - ".$indexMax.", значення - ".$max."</div><br>";
?>
<h3 align="center"><a href="lab13.php">Назад</a><br></h3>
</body>
</html>
