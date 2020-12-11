<?php

require("../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});

$variable=$_POST['formvariable'];
echo $variable;
?>
<html>
<head>
<title>Приклад форми Post</title>
</head>
<body>
<?php 
$choice=$_POST['choiceTask'];
$temparature[0]=$_POST['temparature1'];
$temparature[1]=$_POST['temparature2'];
$temparature[2]=$_POST['temparature3'];
$min=$temparature[0];
$max=$temparature[0];
$sum=0;
switch ($choice) {
	case '1':
	foreach($temparature as $temp){
      if($temp>$max){
 	    $max=$temp;
      }
    }
    echo "<div align=\"center\" style=\"font-size:150%;color:#FF9900;font-weight:bold;\">Максимальна температура: ".$max."</div>";
		break;
	case '2':
	foreach($temparature as $temp){
      if($temp<$min){
 	    $min=$temp;
      }
    }
    echo "<div align=\"center\" style=\"font-size:150%;color:#FF9900;font-weight:bold;\">Мінімальна температура: ".$min."</div>";
		break;
	case '3':
	foreach($temparature as $temp){
      $sum+=$temp;
    }
    echo "<div align=\"center\" style=\"font-size:150%;color:#FF9900;font-weight:bold;\">Середня температура: ".$sum/count($temparature)."</div>";
		break;
	default:
		echo "<div align=\"center\" style=\"font-size:150%;color:#FF9900;font-weight:bold;\">Некоректно введені дані, повторіть спробу"."</div>";
		break;
}
//echo $choice
?>
<h3 align="center"><a href="example2.php">Назад</a><br></h3>
</body>
</html>
