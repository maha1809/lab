<?php
require("../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
if (!empty($_GET["zm"])) {echo "Ім'я переданої змінної ".$_GET["zm"];} else {echo "zminna not fount";}
$zm=$_GET["zm"];

echo "<a align=\"center\" href=example1_1_5_1.php><H1> <p>1.1.5_1 Доступ до змінних форми post</p></H1></a>";
echo "<a align=\"center\" href=example1_1_5_2.php><H1> <p>1.1.5_2 Доступ до змінних форми get</p></H1></a>";
?>
<style>h3{text-align: center;}</style>
<html>
<title>PHP</title> 
<form>
<table border=0 align="center"><tr><td>Логін:</td><td><input type='text' name='ULogin'></td><tr>
<tr><td>Пароль:</td><td><input type='password' name='Passw'></td><tr>
<tr><td><input type='submit' value='Go' name='Send'></td><td>&nbsp</td></td></tr> </table>
<div align="center" style="font-size:120%;">
<h3>Оператори</h3>
<h3><a href="operators/operator_if.php">if, eseif, else(приклади з теорії 1.1.15,1.1.16,1.1.17, 1.1.18 )</a><br></h3>
<h3><a href="operators/operator_switch.php">switch (приклад з теорії 1.1.19)</a><br></h3>
<h3><a href="operators/operator_while.php">while(приклад з теорії 1.1.20)</a><br></h3>
<h3><a href="operators/operator_for.php">for(приклад з теорії 1.1.21)</a><br></h3>
<h3><a href="operators/operator_do_while.php">do...while(приклад з теорії 1.1.22)</a><br></h3>
</form>
<h3 ><a href="../../menu.html">Повернутися в меню</a><br></h3>
</div>
</html>
