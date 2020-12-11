<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body  style="background-color: #D0F0C0;">
<form action="example1.php" method="get">
<div  align="center" style="color:#40826D;font-weight:bold;font-size:150%">Введіть електронну адресу, щоб перевірити, чи відповідає вона шаблону:</div><br>
<div align="center">
<input type="text" name="email" style="font-size:150%"><input type="submit" value="Перевірити"  style="font-size:150%; background-color:#03C03C;; color:white; border-radius: 5px;"></div>
</form>

<?php 
$emailAddress=$_GET['email'];
$flagForCheckEmail = preg_match( "/^([a-zA-Z0-9\._\-]+@[a-zA-Z0-9\._\-]+(\.[a-zA-Z0-9]+)+)+$/", $emailAddress );
//preg_match("шаблон, рядко") - виконує перевірку на відповідність регулярному виразу
//$flagForCheckEmail = preg_match( "/^[a-z]+[a-zA-Z0-9\._\-]*@[a-zA-Z0-9\._\-]+\.[a-zA-Z0-9]+$/", $emailAddress );
if($emailAddress!=""){
if($flagForCheckEmail){
  echo "<div  align=\"center\" style=\"color:#708090; font-size:120%; font-weight:bold;\">Електроннна адреса ".$emailAddress." правильна</div>";
}
else{
	echo "<div  align=\"center\" style=\"color:red; font-size:120%; font-weight:bold;\">Помилка формату e-mail адреси!!!";
	}
}
?>
<h3 align="center"><a href="../lab16.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
