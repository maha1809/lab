<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body  style="background-color: #D0F0C0;">
<form action="example3.php" method="get">
<div  align="center" style="color:#40826D;font-weight:bold;font-size:150%">Введіть номер телефону, щоб перевірити, чи відповідає він шаблону +38 (097) 65-94-888:</div><br>
<div align="center">
<input type="text" name="phoneNUMBER" style="font-size:150%"><input type="submit" value="Перевірити"  style="font-size:150%; background-color:#03C03C;; color:white; border-radius: 5px;\">
</form></div>

<?php 
$phoneNumber=$_GET['phoneNUMBER'];
$flagForCheckPhoneNumber = preg_match( "/^\+(38 \(0(39|50|63|66|67|68|73|89|91|92|93|94|95|96|97|98|99)\)) \d{2}-\d{2}-\d{3}$/", $phoneNumber );
//preg_match("шаблон, рядко") - виконує перевірку на відповідність регулярному виразу
//$flagForCheckEmail = preg_match( "/^[a-z]+[a-zA-Z0-9\._\-]*@[a-zA-Z0-9\._\-]+\.[a-zA-Z0-9]+$/", $emailAddress );
if($phoneNumber!=""){
if($flagForCheckPhoneNumber){
  echo "<div  align=\"center\" style=\"color:#708090; font-size:120%; font-weight:bold;\">Номер телефону ".$phoneNumber." відповідає даному шаблону</div>";
}
else{
	echo "<div  align=\"center\" style=\"color:red; font-size:120%; font-weight:bold;\">Неправильний номер телефону!!!</div>";
	echo "<div  align=\"center\" style=\"color:red; font-size:120%; font-weight:bold;\">Коди мобільних операторів України - +38 0(39|50|63|66|67|68|73|89|91|92|93|94|95|96|97|98|99)</div>";
	echo "<div  align=\"center\" style=\"color:red; font-size:120%; font-weight:bold;\">У номері телефону мають бути присутні +, пробіли,  дужки(), тире -, як це вказано у шаблоні</div>";
	}
}
?>
<h3 align="center"><a href="../lab16.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
