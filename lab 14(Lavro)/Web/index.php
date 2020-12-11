<?php
require("config.php");
//include_once("db.php");
//Конструкция require позволяет включать файлы в PHP сценарий до выполнения сценария PHP.
include_once("function.php");
//Выражение include_once включает и выполняет указанный файл во время выполнения скрипта. Его поведение идентично выражению include, с той лишь разницей, что если код из файла уже один раз был включен, он не будет включен и выполнен повторно и вернёт TRUE
?>

<html>
<head>
<title>PHP</title> 
</head>
<body>
<?php
$zm=10;
echo "<a href=lab12/lab12.php?zm=$zm><p>lab12.php</p></a>";
echo "<a href=lab3/lab13.php><p>lab13.php</p></a>";
?>
<form>
<table border=0><tr><td>Логін:</td><td><input type='text' name='ULogin'></td><tr>
<tr><td>Пароль:</td><td><input type='password' name='Passw'></td><tr>
<tr><td><input type='submit' value='Go' name='Send'></td><td>&nbsp</td></td></tr> </table>
</form>
<h3><a href="../menu.html">Повернутися в меню</a><br></h3>
</body>
</html>
