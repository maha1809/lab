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
$fileName="text.txt";
$fp = fopen( $fileName, "r" ) or die ( "Не вдалося відкрити $fileName" );
$text=fread($fp,filesize($fileName));
$text=str_replace("<", "&lt", $text);
$text=str_replace(">", "&gt", $text);
//$text=explode(" ", fread($fp,filesize($fileName)));//розбиває рядок на на масив
fclose($fp);
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Початковий текст</div>";
echo $text."<hr>";
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Назви відкриваючих тегів</div>";
 $pattern ="/&lt([a-zA-Z]+)&gt/";
preg_match_all ( $pattern ,$text,$out,PREG_PATTERN_ORDER ); 
//preg_match_all(шаблон, текст, масив з результатами,PREG_PATTERN_ORDER ) - Виконує глобальний пошук шаблону в рядку(шукає всі співпадіння)
//PREG_PATTERN_ORDER - Впорядковує результати так, що елемент $matches[0] містить масив повних входжень шаблону, елемент $matches[1] містить масив входжень першої підмаски, і так далі    () - підмаска  
//тобто $matches[0] - масив всіх співпвдінь регулярного виразу, $matches[1] - масив першої підмаски, тобто те, що знаходьться у () 
echo "<br><div align=\"center\" style=\"color:#4682B4; font-size:120%;\">";
	for ($i=0; $i < count($out[1]); $i++) { 
		echo $out[1][$i]." ";
	}
echo "</div><hr>";
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Назви відкриваючих тегів з кутовими дужками</div>";
echo "<br><div align=\"center\" style=\"color:#4682B4; font-size:120%;\">";
	for ($i=0; $i < count($out[0]); $i++) { 
		echo $out[0][$i]." ";
	}
?>
<h3 align="center"><a href="../lab16.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
