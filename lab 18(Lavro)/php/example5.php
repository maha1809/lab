<?php
require("config.php");
//include_once("../db.php");
include_once("function.php");
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
//echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Назви відкриваючих тегів</div>";
 $pattern1 ="/\bтег[a-яіїй]*\b/ui";
 //u - для обробки кирилиці
preg_match_all ( $pattern1 ,$text,$out1,PREG_PATTERN_ORDER ); 
//preg_match_all(шаблон, текст, масив з результатами,PREG_PATTERN_ORDER ) - Виконує глобальний пошук шаблону в рядку(шукає всі співпадіння)
//PREG_PATTERN_ORDER - Впорядковує результати так, що елемент $matches[0] містить масив повних входжень шаблону, елемент $matches[1] містить масив входжень першої підмаски, і так далі    () - підмаска  
//тобто $matches[0] - масив всіх співпвдінь регулярного виразу, $matches[1] - масив першої підмаски, тобто те, що знаходьться у () 
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Всі входження слова 'тег':</div>";
echo "<br><div align=\"center\" style=\"color:#4682B4; font-size:120%;\">";
	for ($i=0; $i < count($out1[0]); $i++) { 
		echo $out1[0][$i]." ";
	}
	echo "</div><hr>";
	$pattern2 ="/[\b\<]*(html[a-za-яіїй]*)/ui";
 //u - для обробки кирилиці
preg_match_all ( $pattern2 ,$text,$out2,PREG_PATTERN_ORDER ); 
echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Всі входження слова 'HTML':</div>";
echo "<br><div align=\"center\" style=\"color:#4682B4; font-size:120%;\">";
	for ($i=0; $i < count($out2[0]); $i++) { 
		echo $out2[0][$i]." ";
	}

echo "</div><hr>";
echo "<div align=\"center\" style=\"color:#704214;font-weight:bold;font-size:150%\">Введіть слово в називному відмінку</div>";
echo "<div align=\"center\"><form action=\"example5.php\" method=\"get\"><input type=\"text\" name=\"word\" style=\"font-size:150%\"><input type=\"submit\" value=\"Знайти\"  style=\"font-size:150%; background-color:#03C03C;; color:white; border-radius: 5px;\">
</form></div>";
$wordFromForm=$_GET['word'];
if($wordFromForm!=""){
  $pattern3="/\b[&lt]*(".$wordFromForm."[a-za-яіїй]*)\b/ui";
  preg_match_all ( $pattern3 ,$text,$out3,PREG_PATTERN_ORDER );
  echo "<br><div align=\"center\" style=\"color:#4682B4; font-size:120%;\">";
    if(count($out3[0])==0){
    	echo "<div align=\"center\" style=\"color:red;font-weight:bold;font-size:150%;\">Слово '".$wordFromForm."' у даному рядку відсутнє</div>";
    }
    else{
    	echo "<div align=\"center\" style=\"color:#40826D;font-weight:bold;font-size:150%;\">Всі входження слова '".$wordFromForm."':</div>";
	for ($i=0; $i < count($out3[0]); $i++) { 
		$out3[0][$i]=str_replace("lt", "",$out3[0][$i] );
		echo $out3[0][$i]." ";
	}
	echo "<div align=\"center\" style=\"color:#6B8E23;font-weight:bold;font-size:150%;\">Речення в порядку спадання кількості слова '".$wordFromForm."':</div>";
	forTask5($text,$pattern3);
    }
echo "</div><hr>";
}
//forTask5($text,$pattern2);
?>
<h3 align="center"><a href="../lab16.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
