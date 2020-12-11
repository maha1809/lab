<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body  style="background-color: #D0F0C0;">
<?php 
$arrayOfDate[0]="18-05-2005";
$arrayOfDate[1]="2019-08-16";
$arrayOfDate[2]="2020-05-04";
$arrayOfDate[3]="2010-01-01";
$arrayOfDate[4]="22-05-2015";
$arrayOfDate[5]="05-10-2000";
$arrayOfDate[6]="2018-08-15";
$arrayOfDate[7]="05-05-2005";
$arrayOfDate[8]="2016-08-04";
$arrayOfDate[9]="14-10-2017";
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Початковий масив дат</div>";
echo "<br><div align=\"center\" style=\"color:#4682B4; font-size:120%;\">";
	for ($i=0;$i<count($arrayOfDate);$i++) {
		if($i<count($arrayOfDate)-1){
			echo $arrayOfDate[$i].", ";
		}
		else{
			echo $arrayOfDate[$i];
		}
	}
	echo "</div><br><hr>";
	echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Перевірка чи відповідає шаблону кожна дата у масиві</div><br>";
	$flag=0;
	for ($i=0;$i<count($arrayOfDate);$i++) {
	 if(!preg_match( "/\b([1-9]\d{3}\-((0[1-9])|(1[0-2]))\-((0[1-9])|([1-2]\d)|(3[0-1])))\b|\b(((0[1-9])|([1-2]\d)|(3[0-1]))\-((0[1-9])|(1[0-2]))\-[1-9]\d{3})\b/", $arrayOfDate[$i] )){ 
	 	// 1000-9999 - year, 1-12 - month, 1-31 - days
      echo "<div align=\"center\" style=\"color:red; font-size:120%;\">Формат дати у масиві під номером ".$i." неправильний</div>";
			$flag=1;
		}
	}
	if($flag==0){
		echo "<div align=\"center\" style=\"color:#4682B4;font-weight:bold;font-size:120%;\">В масиві всі дати відповідають одному з шаблонів (рррр-мм-дд, дд-мм-рррр)</div>";
	}
	echo "<hr>";
	echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Масив, перетворений до формату мм.дд.рррр</div>";
$patterns = array(); 
$patterns[0] = '/(\d{4})-(\d{2})-(\d{2})/'; 
$patterns[1] = '/(\d{2})-(\d{2})-(\d{4})/';
$replacements = array(); 
$replacements[0] = '\2.\3.\1' ; 
$replacements[1] = '\2.\1.\3';
echo "<br>"; 
for ($i=0;$i<count($arrayOfDate);$i++) {
$arrayOfDate[$i]=preg_replace ( $patterns , $replacements , $arrayOfDate[$i] ); 
}
echo "<br><div align=\"center\" style=\"color:#4682B4; font-size:120%;\">";
	for ($i=0;$i<count($arrayOfDate);$i++) {
		if($i<count($arrayOfDate)-1){
			echo $arrayOfDate[$i].", ";
		}
		else{
			echo $arrayOfDate[$i];
		}
	}
	echo "</div><br><hr>";
?>
<h3 align="center"><a href="../lab16.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
