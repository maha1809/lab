<?php
require("config.php");
//include_once("../db.php");
include_once("function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<style>h3{text-align: center;}</style>
<style type="text/css">
body {background-color:Azure; }
</style>
<html>
<H2 align="center" style="color:MediumTurquoise">Лабораторна робота 15</H2>
<?php
$my_array = array('Рядок 1', 'Рядок 2','Рядок 3');
create_table2($my_array,3,8,8);
?>
<h3><a href="example2.php">Приклад 2 </a><br></h3>
<h3><a href="example3_1.php">Приклад 3_1</a><br></h3>
<h3><a href="example3_2.php">Приклад 3_2</a><br></h3>
<h3><a href="zavdannja5.php">Приклад 4</a><br></h3>
<h3><a href="zavdannja6.php">Приклад 5</a><br></h3>
<h3 ><a href="../index.html">Повернутися в головне меню</a><br></h3>
</div>
</html>
